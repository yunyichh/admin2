<?php

use Illuminate\Database\Seeder;

class gameLog2Export extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // base tables
        Encore\Admin\Auth\Database\Menu::truncate();
        Encore\Admin\Auth\Database\Menu::insert(
            [
                [
                    "parent_id" => 0,
                    "order" => 32,
                    "title" => "系统管理",
                    "icon" => "fa-gears",
                    "uri" => NULL,
                    "permission" => NULL
                ],
                [
                    "parent_id" => 2,
                    "order" => 33,
                    "title" => "系统账号",
                    "icon" => "fa-users",
                    "uri" => "auth/users",
                    "permission" => NULL
                ],
                [
                    "parent_id" => 2,
                    "order" => 34,
                    "title" => "角色",
                    "icon" => "fa-user",
                    "uri" => "auth/roles",
                    "permission" => NULL
                ],
                [
                    "parent_id" => 2,
                    "order" => 35,
                    "title" => "权限",
                    "icon" => "fa-ban",
                    "uri" => "auth/permissions",
                    "permission" => NULL
                ],
                [
                    "parent_id" => 2,
                    "order" => 36,
                    "title" => "菜单",
                    "icon" => "fa-bars",
                    "uri" => "auth/menu",
                    "permission" => NULL
                ],
                [
                    "parent_id" => 2,
                    "order" => 37,
                    "title" => "操作日志",
                    "icon" => "fa-history",
                    "uri" => "auth/logs",
                    "permission" => NULL
                ],
                [
                    "parent_id" => 0,
                    "order" => 2,
                    "title" => "用户管理",
                    "icon" => "fa-user",
                    "uri" => "users",
                    "permission" => NULL
                ],
                [
                    "parent_id" => 19,
                    "order" => 3,
                    "title" => "会员列表",
                    "icon" => "fa-odnoklassniki",
                    "uri" => "players",
                    "permission" => NULL
                ],
                [
                    "parent_id" => 19,
                    "order" => 5,
                    "title" => "会员游戏记录",
                    "icon" => "fa-calendar-check-o",
                    "uri" => "game-logs",
                    "permission" => NULL
                ],
                [
                    "parent_id" => 19,
                    "order" => 4,
                    "title" => "用户在线列表",
                    "icon" => "fa-tachometer",
                    "uri" => "player-onlines",
                    "permission" => NULL
                ],
                [
                    "parent_id" => 19,
                    "order" => 6,
                    "title" => "会员查分",
                    "icon" => "fa-hospital-o",
                    "uri" => "player-check-grades",
                    "permission" => "*"
                ],
                [
                    "parent_id" => 19,
                    "order" => 7,
                    "title" => "会员密码查询",
                    "icon" => "fa-table",
                    "uri" => "player-passwords",
                    "permission" => "*"
                ],
                [
                    "parent_id" => 0,
                    "order" => 9,
                    "title" => "游戏管理",
                    "icon" => "fa-gamepad",
                    "uri" => NULL,
                    "permission" => "*"
                ],
                [
                    "parent_id" => 26,
                    "order" => 10,
                    "title" => "库存配置",
                    "icon" => "fa-building",
                    "uri" => "inventory-configurations",
                    "permission" => "*"
                ],
                [
                    "parent_id" => 26,
                    "order" => 11,
                    "title" => "难度配置",
                    "icon" => "fa-paw",
                    "uri" => "difficulty-configurations",
                    "permission" => "*"
                ],
                [
                    "parent_id" => 26,
                    "order" => 12,
                    "title" => "奖池控制",
                    "icon" => "fa-adjust",
                    "uri" => "jackpot-controls",
                    "permission" => "*"
                ],
                [
                    "parent_id" => 26,
                    "order" => 13,
                    "title" => "用户白名单",
                    "icon" => "fa-wheelchair",
                    "uri" => "user-whitelists",
                    "permission" => "*"
                ],
                [
                    "parent_id" => 26,
                    "order" => 14,
                    "title" => "提现白名单",
                    "icon" => "fa-edit",
                    "uri" => "user-whitelist-withdraws",
                    "permission" => "*"
                ],
                [
                    "parent_id" => 26,
                    "order" => 15,
                    "title" => "点控库存",
                    "icon" => "fa-american-sign-language-interpreting",
                    "uri" => "control-inventories",
                    "permission" => "*"
                ],
                [
                    "parent_id" => 26,
                    "order" => 16,
                    "title" => "点控玩家",
                    "icon" => "fa-contao",
                    "uri" => "control-players",
                    "permission" => "*"
                ],
                [
                    "parent_id" => 26,
                    "order" => 17,
                    "title" => "玩家输赢调控",
                    "icon" => "fa-gavel",
                    "uri" => "control-win-loses",
                    "permission" => "*"
                ],
                [
                    "parent_id" => 0,
                    "order" => 22,
                    "title" => "运营管理",
                    "icon" => "fa-connectdevelop",
                    "uri" => NULL,
                    "permission" => "*"
                ],
                [
                    "parent_id" => 35,
                    "order" => 23,
                    "title" => "大厅公告管理",
                    "icon" => "fa-puzzle-piece",
                    "uri" => "public-managements",
                    "permission" => "*"
                ],
                [
                    "parent_id" => 35,
                    "order" => 24,
                    "title" => "活动数据",
                    "icon" => "fa-calendar",
                    "uri" => "active-datas",
                    "permission" => "*"
                ],
                [
                    "parent_id" => 35,
                    "order" => 25,
                    "title" => "金币消耗",
                    "icon" => "fa-google-wallet",
                    "uri" => "gold-consumptions",
                    "permission" => "*"
                ],
                [
                    "parent_id" => 35,
                    "order" => 26,
                    "title" => "输赢排行榜",
                    "icon" => "fa-list-alt",
                    "uri" => "win-lose-rank-lists",
                    "permission" => "*"
                ],
                [
                    "parent_id" => 35,
                    "order" => 27,
                    "title" => "邮件管理",
                    "icon" => "fa-credit-card",
                    "uri" => "email-managements",
                    "permission" => "*"
                ],
                [
                    "parent_id" => 35,
                    "order" => 28,
                    "title" => "推广明细",
                    "icon" => "fa-group",
                    "uri" => "promote-details",
                    "permission" => "*"
                ],
                [
                    "parent_id" => 35,
                    "order" => 29,
                    "title" => "佣金发放记录",
                    "icon" => "fa-bitcoin",
                    "uri" => "commission-give-outs",
                    "permission" => "*"
                ],
                [
                    "parent_id" => 35,
                    "order" => 30,
                    "title" => "佣金领取记录",
                    "icon" => "fa-ge",
                    "uri" => "commission-gets",
                    "permission" => "*"
                ],
                [
                    "parent_id" => 35,
                    "order" => 31,
                    "title" => "佣金分成配置",
                    "icon" => "fa-medium",
                    "uri" => "commission-divides",
                    "permission" => "*"
                ],
                [
                    "parent_id" => 26,
                    "order" => 19,
                    "title" => "赛事记录",
                    "icon" => "fa-500px",
                    "uri" => "match-logs",
                    "permission" => NULL
                ],
                [
                    "parent_id" => 26,
                    "order" => 20,
                    "title" => "牌局查询",
                    "icon" => "fa-angellist",
                    "uri" => "gambling-query",
                    "permission" => NULL
                ],
                [
                    "parent_id" => 0,
                    "order" => 38,
                    "title" => "支付管理",
                    "icon" => "fa-anchor",
                    "uri" => NULL,
                    "permission" => "*"
                ],
                [
                    "parent_id" => 0,
                    "order" => 1,
                    "title" => "首页",
                    "icon" => "fa-home",
                    "uri" => "admin-homes",
                    "permission" => "*"
                ],
                [
                    "parent_id" => 47,
                    "order" => 39,
                    "title" => "后台充值",
                    "icon" => "fa-diamond",
                    "uri" => "recharges/create",
                    "permission" => "*"
                ],
                [
                    "parent_id" => 47,
                    "order" => 40,
                    "title" => "后台充值记录",
                    "icon" => "fa-calendar-o",
                    "uri" => "recharges",
                    "permission" => "*"
                ],
                [
                    "parent_id" => 47,
                    "order" => 41,
                    "title" => "在线充值记录",
                    "icon" => "fa-money",
                    "uri" => "recharge-onlines",
                    "permission" => "*"
                ],
                [
                    "parent_id" => 47,
                    "order" => 42,
                    "title" => "提现审批",
                    "icon" => "fa-rupee",
                    "uri" => "withdrawal-approvals",
                    "permission" => "*"
                ],
                [
                    "parent_id" => 47,
                    "order" => 43,
                    "title" => "提现记录",
                    "icon" => "fa-eur",
                    "uri" => "withdrawal-logs",
                    "permission" => "*"
                ],
                [
                    "parent_id" => 47,
                    "order" => 44,
                    "title" => "提现对账",
                    "icon" => "fa-bold",
                    "uri" => "withdrawal-checks",
                    "permission" => "*"
                ],
                [
                    "parent_id" => 19,
                    "order" => 8,
                    "title" => "会员金币变化",
                    "icon" => "fa-500px",
                    "uri" => "change-gold-records",
                    "permission" => NULL
                ],
                [
                    "parent_id" => 26,
                    "order" => 18,
                    "title" => "赛事管理",
                    "icon" => "fa-cc-mastercard",
                    "uri" => "event-managements",
                    "permission" => NULL
                ],
                [
                    "parent_id" => 26,
                    "order" => 21,
                    "title" => "机器人管理",
                    "icon" => "fa-android",
                    "uri" => "robot-managements",
                    "permission" => NULL
                ]
            ]
        );

        Encore\Admin\Auth\Database\Permission::truncate();
        Encore\Admin\Auth\Database\Permission::insert(
            [
                [
                    "name" => "All permission",
                    "slug" => "*",
                    "http_method" => "",
                    "http_path" => "*"
                ],
                [
                    "name" => "Dashboard",
                    "slug" => "dashboard",
                    "http_method" => "GET",
                    "http_path" => "/"
                ],
                [
                    "name" => "Login",
                    "slug" => "auth.login",
                    "http_method" => "",
                    "http_path" => "/auth/login\r\n/auth/logout"
                ],
                [
                    "name" => "User setting",
                    "slug" => "auth.setting",
                    "http_method" => "GET,PUT",
                    "http_path" => "/auth/setting"
                ],
                [
                    "name" => "Auth management",
                    "slug" => "auth.management",
                    "http_method" => "",
                    "http_path" => "/auth/roles\r\n/auth/permissions\r\n/auth/menu\r\n/auth/logs"
                ],
                [
                    "name" => "agent",
                    "slug" => "agent",
                    "http_method" => "",
                    "http_path" => "/\r\n/users\r\n/players\r\n/player-onlines\r\n/game-logs\r\n/change-game-records"
                ]
            ]
        );

        Encore\Admin\Auth\Database\Role::truncate();
        Encore\Admin\Auth\Database\Role::insert(
            [
                [
                    "name" => "Administrator",
                    "slug" => "administrator"
                ],
                [
                    "name" => "Agent",
                    "slug" => "agent"
                ]
            ]
        );

        // pivot tables
        DB::table('admin_role_menu')->truncate();
        DB::table('admin_role_menu')->insert(
            [
                [
                    "role_id" => 1,
                    "menu_id" => 2
                ],
                [
                    "role_id" => 1,
                    "menu_id" => 24
                ],
                [
                    "role_id" => 1,
                    "menu_id" => 25
                ],
                [
                    "role_id" => 1,
                    "menu_id" => 26
                ],
                [
                    "role_id" => 1,
                    "menu_id" => 27
                ],
                [
                    "role_id" => 1,
                    "menu_id" => 28
                ],
                [
                    "role_id" => 1,
                    "menu_id" => 29
                ],
                [
                    "role_id" => 1,
                    "menu_id" => 30
                ],
                [
                    "role_id" => 1,
                    "menu_id" => 31
                ],
                [
                    "role_id" => 1,
                    "menu_id" => 32
                ],
                [
                    "role_id" => 1,
                    "menu_id" => 33
                ],
                [
                    "role_id" => 1,
                    "menu_id" => 34
                ],
                [
                    "role_id" => 1,
                    "menu_id" => 35
                ],
                [
                    "role_id" => 1,
                    "menu_id" => 36
                ],
                [
                    "role_id" => 1,
                    "menu_id" => 37
                ],
                [
                    "role_id" => 1,
                    "menu_id" => 38
                ],
                [
                    "role_id" => 1,
                    "menu_id" => 39
                ],
                [
                    "role_id" => 1,
                    "menu_id" => 40
                ],
                [
                    "role_id" => 1,
                    "menu_id" => 41
                ],
                [
                    "role_id" => 1,
                    "menu_id" => 42
                ],
                [
                    "role_id" => 1,
                    "menu_id" => 43
                ],
                [
                    "role_id" => 1,
                    "menu_id" => 44
                ],
                [
                    "role_id" => 1,
                    "menu_id" => 47
                ],
                [
                    "role_id" => 1,
                    "menu_id" => 48
                ],
                [
                    "role_id" => 1,
                    "menu_id" => 49
                ],
                [
                    "role_id" => 1,
                    "menu_id" => 50
                ],
                [
                    "role_id" => 1,
                    "menu_id" => 51
                ],
                [
                    "role_id" => 1,
                    "menu_id" => 52
                ],
                [
                    "role_id" => 1,
                    "menu_id" => 53
                ],
                [
                    "role_id" => 1,
                    "menu_id" => 54
                ]
            ]
        );

        DB::table('admin_role_permissions')->truncate();
        DB::table('admin_role_permissions')->insert(
            [
                [
                    "role_id" => 1,
                    "permission_id" => 1
                ],
                [
                    "role_id" => 2,
                    "permission_id" => 7
                ]
            ]
        );

        // finish
    }
}
