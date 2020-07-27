@extends('admin/layout/layout')
@section('content')
<div class="col-md-10 ">
    <br>
    <a href="{{ route('product.create') }}" class="btn btn-success mb-3"> Create Product </a>
<table class="table border table-sm text-center">
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
                <a class="btn btn-warning" href="">Edit</a>
                <a class="btn btn-danger" href="">Delete</a>

{{--                {!! Form::open(['action'=>['ProductController@destroy', $row->id], 'method'=>'DELETE']) !!}--}}
{{--                    <button class="btn btn-danger">Delete</button>--}}
{{--                {!! Form::close() !!}--}}

            </td>
        </tr>
      @endforeach
  </tbody>
</table>
</div>
@endsection
