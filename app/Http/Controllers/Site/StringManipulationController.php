<?php

namespace App\Http\Controllers\Site;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StringManipulationController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        return view('site.teste1.stringManipulation');
    }

    public function formSubmit(Request $req){
        $str = $req->input('str');
        $length = Str::length($str);
        echo("A frase tem $length strings<br/>\n");
        $newstr = wordwrap($str, 10, "<br/>\n", false);
        echo ($newstr);
    }
}
