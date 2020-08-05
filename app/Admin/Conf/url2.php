<?php

if (strtoupper(substr(PHP_OS,0,3)) == 'WIN') {
    return [
        //增加/减少金库金币
        'changeMoney' => 'http://192.168.1.23:8001/change_money',
        //修改手机
        'changePhone' => 'http://192.168.1.23:8001/change_phone',
        //添加赛事
        'eventManagementAdd' => 'http://192.168.1.23:8001/addGame',
        //删除赛事
        'eventManagementDelete' => 'http://192.168.1.23:8001/removeGame',
        //获取赛事
        'eventManagementSelect' => 'http://192.168.1.23:8001/selectGame',
         //代理
        'create_agent' => 'http://192.168.1.23:8001/create_agent',
        'select_agent' => 'http://192.168.1.23:8001/select_agent',
        'change_agent_money' => 'http://192.168.1.23:8001/change_agent_money',
    ];
} else {
    return [
        //增加/减少金库金币
        'changeMoney' => 'http://121.89.193.124:18001/change_money',
        //修改手机
        'changePhone' => 'http://121.89.193.124:18001/change_phone',
        //添加赛事
        'eventManagementAdd' => 'http://121.89.193.124:18001/addGame',
        //删除赛事
        'eventManagementDelete' => 'http://121.89.193.124:18001/removeGame',
        //获取赛事
        'eventManagementSelect' => 'http://121.89.193.124:18001/selectGame',
        //代理
        'create_agent' => 'http://121.89.193.124:18001/create_agent',
        'select_agent' => 'http://121.89.193.124:18001/select_agent',
        'change_agent_money' => 'http://121.89.193.124:18001/change_agent_money',
    ];
}