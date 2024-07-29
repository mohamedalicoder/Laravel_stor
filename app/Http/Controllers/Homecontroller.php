<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;

class Homecontroller extends Controller
{
    public function index(){
    $products= Product::all();
        return view('shop')->with('products',$products);
    }


    public function add_to_cart(Request $Request){
        Cart::create($Request->all());
        return 'product added successfuly';
    }

    public function show_cart(){
    $products=  Cart::with('get_product')->where('user_id',Auth::user()->id)->get();
        return view('cart')->with('products',$products);
    }
}
