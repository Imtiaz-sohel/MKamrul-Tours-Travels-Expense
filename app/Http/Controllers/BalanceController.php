<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BalanceController extends Controller{
    function allBalance(){
        return view('balance');
    }
}
