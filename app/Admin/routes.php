<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix' => config('admin.route.prefix'),
    'namespace' => config('admin.route.namespace'),
    'middleware' => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('admin.home');
    $router->get('/index', 'IndexController@index')->name('admin.index');
    $router->resource('site', SiteController::class);
//    $router->resource('advertiser', AdvertiserController::class);
//    $router->resource('players', PlayerController::class);
    $router->resource('players', Remote\PlayerController::class);
    $router->resource('change-money-logs', changeMoneyLogController::class);
    $router->resource('match-logs', matchLogController::class);

//    $router->resource('vipList', VipListController::class);
    $router->resource('game-logs', Remote\gameLog2Controller::class);
    $router->resource('game-logs-frame', Remote\gameLog2FrameController::class);
    $router->resource('change-gold-records-frame', Remote\changeGoldRecordFrameController::class);
    $router->resource('vault-logs', VaultLogConroller::class);
    $router->resource('lotteries', LotteryConroller::class);
    $router->resource('player-onlines', Remote\PlayerOnlineController::class);
    $router->resource('player-check-grades', PlayerCheckGradeController::class);
    $router->resource('player-passwords', PlayerPasswordController::class);
    $router->resource('change-gold-records', Remote\changeGoldRecordController::class);

    $router->resource('inventory-configurations', inventoryConfigurationController::class);
    $router->resource('inventory-configuration-steps', inventoryConfigurationStepController::class);
    $router->resource('inventory-configuration-jackpots', inventoryConfigurationjackpotController::class);
    $router->resource('inventory-configuration-invs', inventoryConfigurationInventoryController::class);
    $router->resource('difficulty-configurations', difficultyConfigurationController::class);
    $router->resource('difficulty-configuration-steps', difficultyConfigurationStepController::class);
    $router->resource('jackpot-controls', jackpotControlController::class);
    $router->resource('user-whitelists', userWhitelistController::class);
    $router->resource('user-whitelist-withdraws', userWhitelistWithdrawController::class);
    $router->resource('control-inventories', controlInventoryController::class);
    $router->resource('control-players', controlPlayerController::class);
    $router->resource('control-win-loses', controlWinLoseController::class);
    $router->resource('control-win-lose-logs', controlWinLoseLogControlller::class);
    $router->resource('championships-configurations', championshipsConfigurationController::class);
    $router->resource('event-managements', eventManagementController::class);
    $router->resource('event-management-awards', eventManagementAwardsController::class);
    $router->resource('gambling-query', Remote\gamblingQuery::class);//牌局
    $router->resource('gambling-query-frame', Remote\gamblingQueryFrame::class);//牌局
    $router->resource('robot-managements', robotManagementController::class);
    $router->resource('pools', Remote\poolController::class);//水池控制
    $router->resource('chances', Remote\chanceControlController::class);//几率控制
    $router->resource('player-controls', Remote\playerControlController::class);//玩家点控
    $router->resource('player-total', Api\playerTotalController::class);//api统计 玩家输赢
    $router->resource('notices', noticeController::class);
    $router->resource('agent-money-changes', agentMoneyChangeController::class);
    $router->resource('control-servers', controlServerController::class);//服务器控制

    $router->resource('public-managements', publicManagementController::class);
    $router->resource('active-datas', activeDataController::class);
    $router->resource('gold-consumptions', goldConsumptionController::class);
    $router->resource('win-lose-rank-lists', winLoseRankListController::class);
    $router->resource('email-managements', emailManagementController::class);
    $router->resource('promote-details', promoteDetailController::class);
    $router->resource('commission-give-outs', commissionGiveOutController::class);
    $router->resource('commission-gets', commissionGetController::class);
    $router->resource('commission-divides', commissionDivideController::class);

    $router->resource('agent-users', agentUserController::class);
    $router->resource('admin-homes', adminHomeController::class);
    $router->resource('recharges', rechargeController::class);
    $router->resource('recharge-onlines', rechargeOnlineController::class);
    $router->resource('withdrawal-approvals', withdrawalApprovalController::class);
    $router->resource('withdrawal-logs', withdrawalLogController::class);
    $router->resource('withdrawal-checks', withdrawalCheckController::class);

});
