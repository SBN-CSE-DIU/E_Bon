@extends('admin.layout.layout')
@section('content')
<div class="col-lg-9 col-md-10 mx-auto pb-4">
    <h2 class="text-center pt-4 pb-4">Categories</h2>
   <div class="wrap ">
   {!! Form::open(['action'=>'ProductController@store', 'method'=>'POST']) !!}
      <div class="control-group">
        <div class="form-group floating-label-form-group controls">
          <label>Category ID</label>
          <input type="text" class="form-control" name="name" required data-validation-required-message="Please enter ID.">
          <p class="help-block text-danger"></p>
        </div>
      </div>
     
      <div class="control-group">
        <div class="form-group floating-label-form-group controls">
          <label>Category Name</label>
          <input type="text" class="form-control" name="quantity" required data-validation-required-message="Please enter ID.">
          <p class="help-block text-danger"></p>
        </div>
      </div>

      

     
      <br>
      <div class="row justify-content-between">
      <button type="submit" class="btn btn-primary mb-2" id="sendMessageButton">Submit</button>
      <button type="submit" class="btn btn-primary mb-2" id="sendMessageButton">Clear</button>
      </div>
    {!! Form::close() !!}
   </div>
</div>
@endsection
