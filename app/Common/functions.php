<?php
/**
 * Created by PhpStorm.
 * User: rog
 * Date: 2020/6/28
 * Time: 10:44
 */
function getValue($key = null)
{
    $array_other = [
        #删除用户
        "delUser" => "http://121.89.193.124:7890/platform_spread/report/delRelat",
        #重置密保
        "resetSecurity" => "http://121.89.193.124:7890/game_stars/user/binding/reset",
        #查询密保
        "findSecurity" => "http://121.89.193.124:7890/game_stars/user/binding/get"
    ];
    $_configs = file_get_contents(dirname(__DIR__) . '/Admin/Conf/url2.properties');
    preg_match_all('/[\w]+[=][\w\:\/\.\?\=]+[\.]php[\s\S]+[\n]/U', $_configs, $c);
    $cs = null;
    foreach ($c[0] as $item) {
        $_e = explode('=', trim($item));
        $csk = $_e[0];
        $csv = $_e[1] . "=" . $_e[2];
        $cs[$csk] = $csv;
    }
    $cs = array_merge($cs, $array_other);
    return isset($cs[$key]) ? $cs[$key] : false;
}

function getUrl($key = null)
{
    $_configs = require(dirname(__DIR__) . '/Admin/Conf/url2.php');
    return isset($_configs[$key]) ? $_configs[$key] : false;
}

//中文翻译
function ___($key, $in_charset = 'gbk', $out_charset = 'utf-8')
{
    $zh_cn = require __DIR__ . '/zh_cn.php';
    if (!empty($key))
        $key = strtolower(substr($key, 0, 1)) . str_replace(' ', '_', substr($key, 1));
    return isset($zh_cn[$key]) ? iconv($in_charset, $out_charset, $zh_cn[$key]) : $key;
}

function _i($text)
{
    return iconv('gbk', 'utf-8', $text);
}


//多数据库多sql联合查询
function getResultsFromSqls($db, $sqls, $more = false)
{
    $config = $db;
    $conn = new mysqli($config['host'], $config['username'], $config['password'], $config['database']);

    if ($conn->connect_error) {
        return 0;
    }
    $data = null;
    foreach ($sqls as $key => $sql) {
        $result[$key] = $conn->query($sql);
        if (isset($result[$key]->num_rows) && $result[$key]->num_rows > 0) {
            // 输出数据
            while ($row = $result[$key]->fetch_assoc()) {
                if ($more) {
                    $data[$key][] = $row;
                } else {
                    $data[$key] = $row;
                    break;
                }
            }
        } else {
            $data[$key] = '';
            if (strpos(strtolower($sql), 'insert') !== false) {
                $data[$key] = mysqli_insert_id($conn);
            }
            if (strpos(strtolower($sql), 'update') !== false || strpos(strtolower($sql), 'delete') !== false) {
                $data[$key] = $result[$key];
            }
        }
    }
    $conn->close();
    return $data;
}

//游戏记录获取数据
function getColumnData($gameLog, $accountId)
{
//    file_put_contents(__DIR__.'/log.txt',json_encode($gameLog)."\r\n",FILE_APPEND);
    $gameLog = json_decode($gameLog, true);
    $column_target = ['tableSeat1Str1', 'tableSeat1Str2', 'tableSeat1Str3', 'tableSeat1Str4', 'tableSeat1Str5', 'tableSeat1Str6', 'tableSeat1Str7'];
    $data = null;
    foreach ($column_target as $column) {
        $data[] = @json_decode($gameLog[0][$column], true);
    }
    $target = null;
    foreach ($data as $key => $item) {
        if (isset($item['accountId']) && $item['accountId'] == $accountId) {
            $target = $item;
        }
    }

    return $target;
}

function getHttpResponseGET($url, $para = [])
{
    if (!empty($para)) {
        $url .= "?" . http_build_query($para);
    }
    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_HEADER, 0); // 过滤HTTP头
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);// 显示输出结果
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);//SSL证书认证
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
    $responseText = curl_exec($curl);
    //var_dump( curl_error($curl) );//如果执行curl过程中出现异常，可打开此开关，以便查看异常内容
    curl_close($curl);
    // echo 1;die;
    return $responseText;
}

/**
 * 远程获取数据，POST模式
 * 注意：
 * 1.使用Crul需要修改服务器中php.ini文件的设置，找到php_curl.dll去掉前面的";"就行了
 * 2.文件夹中cacert.pem是SSL证书请保证其路径有效，目前默认路径是：getcwd().'\\cacert.pem'
 * @param $url 指定URL完整路径地址
 * @param $cacert_url 指定当前工作目录绝对路径
 * @param $para 请求的数据
 * @param $input_charset 编码格式。默认值：空值
 * return 远程输出的数据
 */
function getHttpResponsePOST($url, $para = [], $input_charset = '')
{
    if (trim($input_charset) != '') {
        $url = $url . "_input_charset=" . $input_charset;
    }
//	echo $url;die;
    $curl = curl_init($url);
//	var_dump($curl);die;

    curl_setopt($curl, CURLOPT_HEADER, 0); // 过滤HTTP头
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);// 显示输出结果
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);//SSL证书认证
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);//严格认证
//    curl_setopt($curl, CURLOPT_CAINFO,$cacert_url);//证书地址
    curl_setopt($curl, CURLOPT_POST, true); // post传输数据
    curl_setopt($curl, CURLOPT_POSTFIELDS, $para);// post传输数据
    $responseText = curl_exec($curl);
//	var_dump( curl_error($curl) );//如果执行curl过程中出现异常，可打开此开关，以便查看异常内容
    curl_close($curl);
    // echo 1;die;
    return $responseText;
}

function logTxt($data)
{
//    if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN')
        file_put_contents(__DIR__ . '/log.txt', "[" . date('Y-m-d H:i:s') . "] " . json_encode($data) . "\r\n", FILE_APPEND);
}

function modal($url)
{
//    $script = <<<'SCRIPT'
//      <script>
//    (function(d) {
//        var iframe = d.body.appendChild(d.createElement('iframe')),
//        doc = iframe.contentWindow.document;
//
//        // style the iframe with some CSS
//        iframe.style.cssText = "width: 100%;height:500px;border: 0px";
//
//        doc.open().write('<body onload="' + 'var d = document;d.getElementsByTagName(\'head\')[0].' + 'appendChild(d.createElement(\'script\')).src' + '=\'{$url}\'">');
//
//        doc.close(); //iframe onload event happens
//    })(document);
//    </script>
//SCRIPT;
//    return $script;
    return "<iframe src='$url' style='width: 100%;height:500px;border: 0px'></iframe>";
}

function modalNextRender($grid)
{

    $links = [
        "http://{$_SERVER['HTTP_HOST']}/vendor/laravel-admin/AdminLTE/dist/css/AdminLTE.min.css",
        "http://{$_SERVER['HTTP_HOST']}/vendor/laravel-admin/font-awesome/css/font-awesome.min.css",
        "http://{$_SERVER['HTTP_HOST']}/vendor/laravel-admin/AdminLTE/plugins/jQuery/jQuery-2.1.4.min.js",
        "http://{$_SERVER['HTTP_HOST']}/vendor/laravel-admin/AdminLTE/bootstrap/css/bootstrap.min.css",
        "http://{$_SERVER['HTTP_HOST']}/vendor/laravel-admin/AdminLTE/bootstrap/js/bootstrap.min.js",
        "http://{$_SERVER['HTTP_HOST']}/vendor/laravel-admin/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css",
        "http://{$_SERVER['HTTP_HOST']}/vendor/laravel-admin/moment/min/moment-with-locales.min.js",
        "http://{$_SERVER['HTTP_HOST']}/vendor/laravel-admin/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js",
    ];
    $link_text = null;
    foreach ($links as $link) {
        if (strpos($link, 'css') !== false)
            $link_text .= "<link rel='stylesheet' href='" . $link . "'>";
        else {
            $link_text .= "<script src='" . $link . "'></script>";
        }
    }
    $style_text = "
        <style type='text/css'>
            td{font-size: 12px}
            th{font-size: 13px}            
        </style>
        <script type='application/javascript'>
            $(document).ready(function() {
                $('body > div > div:nth-child(1) > div.pull-left > div').click(function() {
                    $('#filter-box').toggle()
                })     
               $('#filter-box').hide()           
               $('#filter-box').removeClass('hide')           
               $('#filter-box > form > div.row > div > div > div > div:nth-child(1)').hide()
               $('#filter-box > form > div.row > div > div > div > div:nth-child(2)').hide()              
               $('#filter-box > form > div.box-footer > div > div > div.col-md-8 > div:nth-child(2)').hide()              
               $('#filter-box > form > div.row > div > div > div > div:nth-child(3) > div > div >input').datetimepicker({ 
                     format: 'YYYY-MM-DD hh:mm', 
                     locale: moment.locale('zh-cn') 
                }); 
                $('#filter-box > form > div.row > div > div > div > div:nth-child(4) > div > div >input').datetimepicker({ 
                     format: 'YYYY-MM-DD hh:mm', 
                     locale: moment.locale('zh-cn') 
                });              
            })
        </script>";
    exit($link_text . $style_text . $grid->render());
}

