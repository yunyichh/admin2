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
    $_configs = file_get_contents(dirname(__DIR__) . '/Admin/Conf/url.properties');
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

//中文翻译
function ___($key)
{
    $zh_cn = require __DIR__ . '/zh_cn.php';
    if (!empty($key))
        $key = strtolower(substr($key, 0, 1)) . str_replace(' ', '_', substr($key, 1));
    return isset($zh_cn[$key]) ? iconv('gbk', 'utf-8', $zh_cn[$key]) : $key;
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

function getColumnData($gameLog, $accountId)
{
    $gameLog = json_decode($gameLog, true);
    $column_target = ['tableSeat1Str1', 'tableSeat1Str2', 'tableSeat1Str3', 'tableSeat1Str4', 'tableSeat1Str5', 'tableSeat1Str6', 'tableSeat1Str7'];
    $data = null;
    foreach ($column_target as $column) {
        $data[] = @json_decode($gameLog[0][$column], true);
    }
    $target = null;
    foreach ($data as $key=>$item){
        if(isset($item['accountId'])&&$item['accountId']==$accountId){
            $target = $item;
        }
    }

    return $target;
}