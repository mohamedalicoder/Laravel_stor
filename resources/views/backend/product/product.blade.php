@extends('layout.back_end_template')
@section('back_content')

<div class="container" style="padding:7rem">
<a href="{{URL('add_product')}}" class="btn btn-success">add new</a>

<table class="table table-border">
    <tr>
        <th>Product Name</th>
        <th>Price</th>
        <th>Category</th>
        <th>colors</th>
        <th>Action</th>
    </tr>
    @foreach($data as $row)
        <tr>
            <td>{{$row->name}}</td>
            <td>{{$row->price}}</td>
            <td>{{$row->get_category->name}}</td>
            <td><img width=50 
            src="{{URL('uploads/'.$row->img)}}" 
            alt=""></td>
            <td>
                @foreach($row->get_color as $color)
                    <span>{{$color->name}}</span>
                @endforeach
            </td>
            <td>
                <a href="{{URL('product_edit/'.$row->id)}}"
                    class="btn btn-success">Edit</a>
                <a href="{{URL('product_delete/'.$row->id)}}"
                    class="btn btn-danger">Delete</a>
                
            </td>
        </tr>
    @endforeach
</table>
</div>

@endsection