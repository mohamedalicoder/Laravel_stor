<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class milkshake extends Controller
{
public function index(){
    return view('fronts.milkshake');
}
}
