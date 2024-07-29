<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pancake extends Controller
{
    public function index(){
        return view('fronts.pancake');
    }
}
