<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WhileLoopController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        return view ('site.teste2.whileLoop');
    }

    public function calculator (Request $req) {
        $total = $req->input('initVal');
        $ced = 100;
        $totced = 0;
        while (true) {
            if ($total >= $ced) {
                $total -= $ced;
                $totced += 1;
            }
            else {
                if ($totced > 0) {
                    print("$totced cédulas de R$ $ced,00<br/>\n");
                }
                if ($ced == 100) {
                    $ced = 50;
                }
                elseif ($ced == 50) {
                    $ced = 20;
                }
                elseif ($ced == 20) {
                    $ced = 10;
                }
                $totced = 0;
                if ($total == 0) {
                    break;
                }
            }
        }
    }
}
