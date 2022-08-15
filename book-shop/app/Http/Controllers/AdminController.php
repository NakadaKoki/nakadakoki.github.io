<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function manage(){
        return view('manage_product');
    }

    function manage_category(){
        return view('manage_category');
    }

    function manage_subcategory(){
        return view('manage_subcategory');
    }
}
