@extends('users/layout/layout')
@section('contents')

<section id="orderListPart">
      <!-- my order -->
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="sideTitle Shado">
              <h1>User name</h1>
            </div>
            <div class="sideMenu mt-4">
              <div class="dropdown-menu show">
                <a class="dropdown-item" href="#">My Account</a>
                <a class="dropdown-item" href="#">My order</a>
                <a class="dropdown-item" href="#">My Wish List</a>
              </div>
            </div>
          </div>

          <div class="col-md-8">
            <div class="orderDetailsList">
              <div class="container">
                <div class="row">
                  <div class="col-md-12">
                    <h1>My Order</h1>
                    <p>Total Order <span>0</span></p>
                    <div class="border"></div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">

                    <div class="row">
                      <div class="col-md-4">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                      </div>
                      <div class="col-md-4">
                        <select class="form-control" name="" id="">
                          <option value="">--Select--</option>
                          <option value="">--Select--</option>
                        </select>
                      </div>
                      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Submit</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          

          <section>
            <div class="orderDetailsList">
              <div class="container">
                <div class="row">
                  <div class="col-md-12">
                    <div class="orderItem pt-3 pb-3">
                      <h3>first order</h3>
                      <div class="orderborder"></div>
                    </div>
                    <div class="orderItem pt-3 pb-3">
                      <h3>second order</h3>
                      <div class="orderborder"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>
     
    </section>

@endsection
