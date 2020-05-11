<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testController extends Controller
{
    public function test(Request $request)
    {
        $a = $request->get('a');
        $b = $request->get('b');
        $c = $request->get('c');
        if (empty($a) || empty($b) || empty($c))
            echo "params need";
        else
            $sign = md5($a . $b . $c);
    }
}
