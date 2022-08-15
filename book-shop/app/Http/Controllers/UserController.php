<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function Calculate_Total() {
        return view('calc_total');
    }

    function Payment() {
        return view('payment_online');
    }

    
}
