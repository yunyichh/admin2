<?php

namespace App\Admin\Controllers\Remote;

use App\Remote\gameLog;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Encore\Admin\Widgets\Table;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class gamblingQueryFrame extends AdminController
{

    protected $accountId = null;
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Remote\gameLog';

    function __construct(Request $request)
    {
        $this->accountId = $request->get('accountId',0);
    }

    function title()
    {
        return _i('�ƾֲ�ѯ');
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new gameLog());
        $grid->disableActions();
        $grid->disableRowSelector();
        $grid->disableColumnSelector();
        $grid->disableCreateButton();
//         $grid->disableFilter();
        $grid->paginate(50);
        $accountId = $this->accountId;
        $grid->filter(function ($filter) use ($accountId) {
            $filter->like('onlyId', ___('OnlyId'));
            $filter->like('onlyId', ___('onlyId'));
            $filter->where(function ($query) {
                $time = strtotime($this->input) * 1000;
                $query->where('time', '>', $time);
            }, ___('gameStartTime'))->datetime();
            $filter->where(function ($query) {
                $time = strtotime($this->input) * 1000;
                $query->where('time', '<', $time);
            }, ___('gameEndTime'))->datetime();
        });
        $tableIds = DB::connection('mysql3')->table('gamerecordentity')->where('accountId', 'like', $accountId)->pluck('tableId')->toArray();
        $grid->model()->whereIn('onlyId', $tableIds)->orderBy('time', 'desc');

//        $grid->column('onlyId', ___('OnlyId'));
//        $grid->column('bigBlindIndex', ___('BigBlindIndex'));
//        $grid->column('gameNums', ___('GameNums'));
//        $grid->column('smallBlindIndex', ___('SmallBlindIndex'));
        $grid->column('tableCards', ___('TableCards'))->display(function () {
            return trim($this->tableCards, '[],');
        });
//        $grid->column('tableId', ___('TableId'

        $tableSeatStr = ['tableSeat1Str1', 'tableSeat1Str2', 'tableSeat1Str3', 'tableSeat1Str4', 'tableSeat1Str5', 'tableSeat1Str6', 'tableSeat1Str7'];

        foreach ($tableSeatStr as $item) {
            $strItem = null;
            $strItem = (string)$item;
            $grid->column($strItem, ___($strItem))->display(function () use ($strItem, $accountId) {
                //{"accountId":281543696188492,"bGamed":true,"winOrLoseMoney":20,"betMoney":50,"money":5819,"integral":0,"cbHandData":"[÷��5,����2,]","seatId":1,"actState":4}
                $seat = json_decode($this->{(string)$strItem}, true);
                $text = null;
                if (!empty($seat['accountId']) && $accountId == $seat['accountId']) {
                    $style_color = "style = 'color:darkred'";
                    $text .= "<p $style_color>";
                }
                if (!empty($seat['accountId'])) {
//                    $text .= _i(' �˺�ID:') . "<br><span>" . number_format($seat['accountId'], 0, '', '') . "</span><br>";
                    //��������sql
                    $account = DB::connection('mysql3')->table('accountentity')->where('accountId', $seat['accountId'])->get(['robotFlag', 'starNO'])->toArray();
                    $href = url('admin/players') . '?&starNO=' . $account[0]->starNO;
                    $text .= _i(' ��ϷID:') . ("<span>" . $account[0]->starNO . "</span><br>");
                }
                if (!empty($seat['winOrLoseMoney']) || (isset($seat['winOrLoseMoney']) && $seat['winOrLoseMoney'] == 0))
                    $text .= _i('��Ӯ����:') . "<span>" . $seat['winOrLoseMoney'] . "</span><br>";
                if (!empty($seat['cbHandData']))
                    $text .= _i(' ����:') . "<span>" . trim($seat['cbHandData'], '[],') . "</span>";
                if (!empty($seat['accountId']) && $accountId == $seat['accountId']) {
                    $text .= "</p>";
                }
                if (empty($seat)) {
                    $text .= _i('');
                }
                return $text;
            });
        }
        $grid->column('time', ___('Time'))->display(function () {
            return date('Y-m-d H:i:s', ($this->time) / 1000);
        })->sortable();
//         return $grid;

        modalNextRender($grid);
    }
}
