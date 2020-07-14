@extends('admin/layout/layout')
@section('content')
<div class="col-md-9">
    { $name }}
    <br>
    <a href="{{ route('product.create') }}"> Create Product </a>
<table class="table table-sm text-center my-0">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Catagory</th>
      <th scope="col">Quantity</th>
      <th scope="col">Price</th>
      <th scope="col">Discount</th>
      <th scope="col">Description</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
      @foreach($rows as $row)
        <tr>
            <td> {{ $row->name }} </td>
            <td> {{ $row->category_id }} </td>
            <td> {{ $row->quantity }} </td>
            <td> {{ $row->price }} </td>
            <td> {{ $row->discount }} </td>
            <td> {{ $row->description }} </td>
            <td>
                <a class="btn btn-info" href="">View</a>
                <a class="btn btn-warning" href="">Update</a>
                {!! Form::open(['action'=>['ProductController@destroy', $row->id], 'method'=>'DELETE']) !!}
                    <button class="btn btn-danger">Delete</button>
                {!! Form::close() !!}
            </td>
        </tr>
      @endforeach
  </tbody>
</table>
</div>
@endsection
