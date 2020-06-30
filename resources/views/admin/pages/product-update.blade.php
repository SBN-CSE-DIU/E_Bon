@extends('admin/layout_admin/layout')
@section('content')
<div class="col-lg-9 col-md-10 mx-auto">
                    <h2>Insert Product</h2>
                    
                    <form name="sentMessage" id="contactForm" novalidate>
                      <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                          <label>Product ID</label>
                          <input type="text" class="form-control"  id="name" required data-validation-required-message="Please enter ID.">
                          <p class="help-block text-danger"></p>
                        </div>
                      </div>
                      <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                          <label>Product Name</label>
                          <input type="text" class="form-control"  id="name" required data-validation-required-message="Please enter ID.">
                          <p class="help-block text-danger"></p>
                        </div>
                      </div>
                      <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                          <label>Brand Name</label>
                          <select class="form-control" name="" id="">
                              <option value="">--SELECT--</option>
                              <option value="">--SELECT--</option>
                              <option value="">--SELECT--</option>
                          </select>
                        </div>
                      </div>
                      <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                          <label>Catagories</label>
                          <select class="form-control" name="" id="">
                              <option value="">--SELECT--</option>
                              <option value="">--SELECT--</option>
                              <option value="">--SELECT--</option>
                          </select>
                        </div>
                      </div>
                      <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                          <label>Images</label>
                          <input type="file" class="form-control"  id="name" required data-validation-required-message="Please enter ID.">
                          <p class="help-block text-danger"></p>
                        </div>
                      </div>
                      <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                          <label>Quentaty</label>
                          <input type="text" class="form-control"  id="name" required data-validation-required-message="Please enter ID.">
                          <p class="help-block text-danger"></p>
                        </div>
                      </div>
                      
                      <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                          <label>Description</label>
                          <textarea rows="5" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Please enter a message."></textarea>
                          <p class="help-block text-danger"></p>
                        </div>
                      </div>
                      <br>
                      <div id="success"></div>
                      <button type="submit" class="btn btn-primary mb-2" id="sendMessageButton">Update</button>
                    </form>
                  </div>
@endsection