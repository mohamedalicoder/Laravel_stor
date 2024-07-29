@extends('layout.front_template')
@section('content')

@foreach($products as $product)
<div class="card col-3" >
        <img src="{{URL('uploads/'.$product->get_product->img)}}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{$product->get_product->name}}</h5>
            <p class="card-text">{{$product->get_product->price}}</p>
        </div>
        </div>
@endforeach

@endsection