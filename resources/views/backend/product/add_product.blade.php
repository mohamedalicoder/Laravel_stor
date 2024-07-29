@extends('layout.back_end_template')
@section('back_content')

<div class="container" style="padding:7rem">
<form action="{{URL('save_product')}}" method="post" enctype="multipart/form-data">
    @csrf
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Name</label>
  <input type="text" class="form-control" name="name">
</div>
@error('name')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror


<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Price</label>
  <input type="text" class="form-control" name="price">
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
  <option value="{{$cat->id}}">{{$cat->name}}</option>
  @endforeach
</select>


<select class="form-select" name="color_id[]" aria-label="Default select example" multiple>
  <option value="">Select color</option>

  @foreach($colors as $color)
  <option value="{{$color->id}}">{{$color->name}}</option>
  @endforeach
</select>


<button class="btn btn-success" type="submit">Save</button>
</form>
</div>

@endsection