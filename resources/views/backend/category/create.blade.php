@extends('layout.back_end_template')
@section('back_content')

<div class="container" style="padding:7rem">
<form action="{{URL('category_store')}}" method="post" >
    @csrf
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Name</label>
  <input type="text" class="form-control" name="name">
</div>




<button class="btn btn-success" type="submit">Save</button>
</form>
</div>

@endsection