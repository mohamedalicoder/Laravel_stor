@extends('layout.back_end_template')
@section('back_content')

<div class="container" style="padding:7rem">
<form action="{{URL('update_product/'.$product->id)}}"
 method="post" enctype="multipart/form-data">
    @csrf
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Name</label>
  <input type="text" class="form-control" name="name" value="{{$product->name}}">
</div>
@error('name')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Price</label>
  <input type="text" class="form-control" name="price" value="{{$product->price}}">
</div>
@error('price')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror


<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Image</label>
  <input type="file" class="form-control" name="img">
</div>
@error('img')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

<select class="form-select" name="category_id" aria-label="Default select example">
  <option value="">Select Category</option>
  @foreach($cats as $cat)
  @if($product->category_id == $cat->id)
  <option selected value="{{$cat->id}}">{{$cat->name}}</option>
  @endif
  <option value="{{$cat->id}}">{{$cat->name}}</option>
  @endforeach
</select>

<select class="form-select" name="color_id[]" aria-label="Default select example" multiple>




  @foreach($colors as $color)

  @if (in_array($color->id, $selected_colors))
  <option value="{{$color->id}}" selected>{{$color->name}}</option>
  @else
  <option value="{{$color->id}}">{{$color->name}}</option>
  @endif



  @endforeach
</select>

<button class="btn btn-success" type="submit">Save</button>
</form>
</div>

@endsection