@extends('admin/layout_admin/layout')
@section('content')
<div class="col-md-9">
<table class="table table-sm text-center my-0">
  <thead>
    <tr>
      <th scope="col">Product ID</th>
      <th scope="col">Product Name</th>
      <th scope="col">Brand Name</th>
      <th scope="col">Catagories</th>
      <th scope="col">Images</th>
      <th scope="col">Quantity</th>
      <th scope="col">Description</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>2</td>
      <td><a href=""><img src="{{('assets/images/dog1.jpg')}}" class="img-thumbnail" style="width:200px" alt="" ></a></td>
      <td>2</td>
      <td>This is Discription</td>
      <td>
          <a class="btn btn-info" href="">View</a>
          <a class="btn btn-warning" href="{{URL::to('/product-update')}}">Update</a>
          <a class="btn btn-danger" href="">Delete</a>
        </td>
    </tr>


   
  </tbody>
</table>
</div>
@endsection