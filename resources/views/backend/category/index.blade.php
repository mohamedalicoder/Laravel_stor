@extends('layout.back_end_template')
@section('back_content')

<div class="container">

<a href="{{URL('category_create')}}" class="btn btn-success">add new</a>

<table class="table table-border">
    <tr>
        <th>Name</th>
        <th>Action</th>
    </tr>
@foreach($data as $row)
<tr>
    <td>{{$row->name}}</td>
    <td>
        <a href="{{URL('catgory_edit/'.$row->id)}}" class="btn btn-success">Edit</a>
        <a href="{{URL('catgory_delete/'.$row->id)}}" class="btn btn-danger">Delete</a>
    </td>
</tr>
@endforeach
</table>

</div>
@endsection