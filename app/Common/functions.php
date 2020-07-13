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
        #ɾ���û�
        "delUser" => "http://121.89.193.124:7890/platform_spread/report/delRelat",
        #�����ܱ�
        "resetSecurity" => "http://121.89.193.124:7890/game_stars/user/binding/reset",
        #��ѯ�ܱ�
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

//���ķ���
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

//echo getValue('findAllUser');
