<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testController extends Controller
{
    public function test(Request $request)
    {
        $a = $request->get('a');

        if (empty($a))
            echo "params need";
        else {
            $sign = md5($a);
            $request->session()->put('sign', $sign);
        }
        echo $request->session()->get('sign');
    }
}
