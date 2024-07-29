<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class full_menu extends Controller
{
    public function index()
    {
        return view('fronts.full_menu');
    }
}
