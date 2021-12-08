<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;

use Illuminate\Routing\Controller;

class SecondeController extends Controller
{
    public function __construct()
    {
        $this -> middleware('auth')->except('ShowString1');
    } 

    public function ShowString0() {

        return 'string0';
    }

    public function ShowString1() {

        return 'string1';
    }

    public function ShowString2() {

        return 'string2';
    }

    public function ShowString3() {

        return 'string3';
    }
}
