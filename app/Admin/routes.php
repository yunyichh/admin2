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
    $router->resource('advertiser', AdvertiserController::class);
    $router->resource('players', PlayerController::class);
    $router->resource('vipList', VipListController::class);
    $router->resource('game-logs', GameLogConroller::class);
    $router->resource('vault-logs', VaultLogConroller::class);
    $router->resource('lotteries', LotteryConroller::class);
    $router->resource('player-onlines', PlayerOnlineController::class);
    $router->resource('player-check-grades', PlayerCheckGradeController::class);
    $router->resource('player-passwords', PlayerPasswordController::class);
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
    $router->resource('public-managements', publicManagementController::class);
    $router->resource('active-datas', activeDataController::class);
    $router->resource('gold-consumptions', goldConsumptionController::class);
    $router->resource('win-lose-rank-lists', winLoseRankListController::class);
    $router->resource('email-managements', emailManagementController::class);
    $router->resource('promote-details', promoteDetailController::class);
    $router->resource('commission-give-outs', commissionGiveOutController::class);
    $router->resource('commission-gets', commissionGetController::class);
    $router->resource('commission-divides', commissionDivideController::class);
    $router->resource('championships-configurations', championshipsConfigurationController::class);
    $router->resource('agent-users', agentUserController::class);
    $router->resource('admin-homes', adminHomeController::class);
    $router->resource('recharges', rechargeController::class);

});
