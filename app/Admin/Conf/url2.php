<?php

if (strtoupper(substr(PHP_OS, 0, 3)) == 'WIN') {
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
//        'eventManagementSelect' => 'http://192.168.1.23:8001/selectGame',
        'eventManagementSelect' => 'http://121.89.193.124:18002/selectGame',
        //代理
        'create_agent' => 'http://192.168.1.23:8001/create_agent',
        'select_agent' => 'http://192.168.1.23:8001/select_agent',
        'change_agent_money' => 'http://192.168.1.23:8001/change_agent_money',
        //机器人管理
        'get_robot_data' => 'http://192.168.1.23:8001/get_robot_data',
        'robot_ai_type' => 'http://192.168.1.23:8001/robot_ai_type',
        'robot_join_num' => 'http://192.168.1.23:8001/robot_join_num',
        //水池挡位点控
        'pool' => 'http://192.168.1.20:8002/change_dzpk_pool',
        'gears' => 'http://192.168.1.20:8002/change_dzpk_control',
        'player_control' => 'http://192.168.1.20:8002/change_dzpk_player_control',
        'dzpk_pool' => 'http://192.168.1.20:8002/get_dzpk_pool',
        //公告
        'notice' => 'http://192.168.1.23:8002/notice',
        //服务器
        'stop_data'=>'http://192.168.1.23:8002/stop_data',
        'set_stop' => 'http://192.168.1.23:8002/set_stop',
    ];
} else {
    return [
        //增加/减少金库金币
        'changeMoney' => 'http://121.89.193.124:18002/change_money',
        //修改手机
        'changePhone' => 'http://121.89.193.124:18002/change_phone',
        //添加赛事
        'eventManagementAdd' => 'http://121.89.193.124:18002/addGame',
        //删除赛事
        'eventManagementDelete' => 'http://121.89.193.124:18002/removeGame',
        //获取赛事
        'eventManagementSelect' => 'http://121.89.193.124:18002/selectGame',
        //代理
        'create_agent' => 'http://121.89.193.124:18002/create_agent',
        'select_agent' => 'http://121.89.193.124:18002/select_agent',
        'change_agent_money' => 'http://121.89.193.124:18002/change_agent_money',

        'get_robot_data' => 'http://121.89.193.124:18002/get_robot_data',
        'robot_ai_type' => 'http://121.89.193.124:18002/robot_ai_type',
        'robot_join_num' => 'http://121.89.193.124:18002/robot_join_num',

         //水池挡位点控
        'pool' => 'http://121.89.193.124:18002/change_dzpk_pool',
        'gears' => 'http://121.89.193.124:18002/change_dzpk_control',
        'player_control' => 'http://121.89.193.124:18002/change_dzpk_player_control',
        'dzpk_pool' => 'http://121.89.193.124:18002/get_dzpk_pool',
        //公告
        'notice' => 'http://121.89.193.124:18002/notice',
        //服务器
        'stop_data'=>'http://121.89.193.124:18002/stop_data',
        'set_stop' => 'http://121.89.193.124:18002/set_stop',
    ];
}