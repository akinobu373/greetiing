<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FreemessageController extends Controller
{
    public function message($msg){
        return view ('message',['msg' => $msg]);
    }
}
