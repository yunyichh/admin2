<?php
/**
 * Created by PhpStorm.
 * User: rog
 * Date: 2020/8/21
 * Time: 11:07
 */
$cid = null;
go(function() {
    go(function ()  {
        co::sleep(3.0);
        go(function () {
            co::sleep(2.0);
            echo "co[3] end\n";
        });
        echo "co[2] end\n";
    });

    co::sleep(1.0);
    echo "co[1] end\n";
});

//yield->resume
$cid2 = Swoole\Coroutine::create(function(){
    Swoole\Coroutine::yield();
    echo "co[4] end\n";
});

$cid = go(function () {
    echo "co 1 start\n";
    co::yield();
    echo "co 1 end\n";
});

go(function () use ($cid,$cid2) {
    echo "co 2 start\n";
    co::sleep(0.5);
    co::resume($cid);
    co::resume($cid2);
    echo "co 2 end\n";
});