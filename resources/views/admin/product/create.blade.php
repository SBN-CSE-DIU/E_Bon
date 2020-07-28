@extends('admin/include/layout')
@section('content')
<div class="col-lg-9 col-md-10 mx-auto">
    <h2>Insert Product</h2>
    {!! Form::open(['action'=>'ProductController@store', 'method'=>'POST', 'enctype'=>'multipart/form-data']) !!}
      <div class="control-group">
        <div class="form-group floating-label-form-group controls">
          <label>Product Name</label>
          <input type="text" class="form-control" name="name" required data-validation-required-message="Please enter ID.">
          <p class="help-block text-danger"></p>
        </div>
      </div>
      <div class="control-group">
        <div class="form-group floating-label-form-group controls">
          <label>Catagory</label>
          <select class="form-control" name="category_id">
              <option value="">--SELECT--</option>
          </select>
        </div>
      </div>
      <div class="control-group">
        <div class="form-group floating-label-form-group controls">
          <label>Images</label>
          <input type="file" class="form-control" name="image">
          <p class="help-block text-danger"></p>
        </div>
      </div>
      <div class="control-group">
        <div class="form-group floating-label-form-group controls">
          <label>Quantity</label>
          <input type="text" class="form-control" name="quantity" required data-validation-required-message="Please enter ID.">
          <p class="help-block text-danger"></p>
        </div>
      </div>

      <div class="control-group">
        <div class="form-group floating-label-form-group controls">
          <label>Price</label>
          <input type="text" class="form-control" name="price" required data-validation-required-message="Please enter ID.">
          <p class="help-block text-danger"></p>
        </div>
      </div>

      <div class="control-group">
        <div class="form-group floating-label-form-group controls">
          <label>Description</label>
          <textarea name="description" rows="5" class="form-control"></textarea>
          <p class="help-block text-danger"></p>
        </div>
      </div>
      <br>
      <button type="submit" class="btn btn-primary mb-2" id="sendMessageButton">Submit</button>
    {!! Form::close() !!}
</div>
@endsection
