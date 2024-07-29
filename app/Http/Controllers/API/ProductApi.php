<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductApi extends Controller
{
    public function get_products(){
       $products= Product::all();
       return  response()->json($products);
    }

    public function add_products(Request $request){
      $product=  Product::create($request->all()); 

      if($product){
        return  response()->json(['product'=>$product , 'message'=>'Data saved']);
      }else{
        return  response()->json(['message'=>'tray again later']);
      }
    }
}

