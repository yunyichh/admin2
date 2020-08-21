<?php
/**
 * Created by PhpStorm.
 * User: rog
 * Date: 2020/8/21
 * Time: 14:41
 */

$chan = new Co\Channel();
Co::create(function()use($chan){
    for ($i=0;$i<10;$i++){
        $chan->push($i);
    }
});
Co::create(function()use($chan){
    for ($i=0;$i<10;$i++){
        $i = $chan->pop();
        echo $i;
    }
});