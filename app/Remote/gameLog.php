<?php

namespace App\Remote;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class gameLog extends Model
{
    protected $connection = 'mysql4';//dzpk数据库
    protected $table = 'gamerecordentity';

    public function gameLog2()
    {
        $instance = new gameLog2(); // new 实例
        $instance->setTable('qpplatform.gamerecordentity'); // 设置该实例的表。zp_wechat是我的另一个数据库
        $query =$instance->newQuery();
        return new BelongsTo($query,$this,'tableId','onlyId',null);
    }
}
