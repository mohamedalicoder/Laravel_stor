@extends('layout.front_template')
@section('content')
<style>
    .card {
    max-width: 300px;
    margin: 10px;
}

.card-body {
    padding: 10px;
}

@media (max-width: 768px) {
    .card {
        max-width: 100%;
    }

    .card-body button {
        font-size: 14px;
        padding: 5px 10px;
    }
}


</style>
<div class="alert alert-success" role="alert" id="msg"></div>
<div class="container">
    <div class="row justify-content-between" style="padding:3rem 0">
        @foreach($products as $product)
        <div class="card col-3" >
        <img src="{{URL('uploads/'.$product->img)}}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{$product->name}}</h5>
            <p class="card-text">{{$product->price}}</p>
            <button type="button" class="btn btn-primary add_to_cart"
            product_id="{{$product->id}}"
            user_id="{{Auth::user()->id}}" >Order Now </button>
        </div>
        </div>
        @endforeach
    </div>
</div>

@endsection

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $( document ).ready(function() {

        $(".add_to_cart").click(function(){
            var product_id = this.getAttribute('product_id')
            var user_id = this.getAttribute('user_id')



            $.ajax({
            url: "add_to_cart",
            type: "get", //send it through get method
            data: {
                'product_id':product_id,
                    'user_id':user_id
            },
            success: function(response) {
                document.getElementById("msg").style.display="block";
                document.getElementById("msg").innerText=response;

            }

            });


        })

    })





</script>
