<?php

namespace App\Remote;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class gameLog extends Model
{
    protected $connection = 'mysql4';//dzpk���ݿ�
    protected $table = 'gamerecordentity';

    public function gameLog2()
    {
        $instance = new gameLog2(); // new ʵ��
        $instance->setTable('qpplatform.gamerecordentity'); // ���ø�ʵ���ı�zp_wechat���ҵ���һ�����ݿ�
        $query =$instance->newQuery();
        return new BelongsTo($query,$this,'tableId','onlyId',null);
    }
}
