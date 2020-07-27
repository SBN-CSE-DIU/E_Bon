@extends('users/layout/layout')
@session('contents')

<section id="orderListPart">
    <!-- my order -->
    <div class="container">
      <div class="row">
        
            <div class="col-md-3">
                <div class="sideTitle Shado" >
                  <h3>User name</h3>
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
            <div class="backShado">
                <section id="nameEditPart"><!--name edit part start-->
                    <div class="border"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="profileDetails">
                                            <h3>Personal Information <span class="profileSpan"><a href="">Change Information</a></span></h3>
                                            
                                            
                                    </div>
                                    <div class="border"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="profileDetails">
                                        <form>
                                            <div class="form-group row">
                                              <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
                                              <div class="col-sm-10">
                                                <input type="Text" class="form-control" id="inputEmail3" placeholder="Name" disabled>
                                              </div>
                                            </div>
                                            <div class="form-group row">
                                              <label for="inputPassword3" class="col-sm-2 col-form-label">Date of Birth</label>
                                              <div class="col-sm-10">
                                                <input type="date" class="form-control"  disabled>
                                              </div>
                                            </div>
                                            <fieldset class="form-group ">
                                                <div class="row">
                                                  <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
                                                  <div class="col-sm-10">
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" disabled name="gridRadios" id="gridRadios1" value="option1" checked>
                                                      <label class="form-check-label" for="gridRadios1">
                                                        Male
                                                      </label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" disabled name="gridRadios" id="gridRadios2" value="option2">
                                                      <label class="form-check-label" for="gridRadios2">
                                                        Female
                                                      </label>
                                                    </div>
                                                   
                                                  </div>
                                                </div>
                                              </fieldset>
                                              <button type="submit" class="btn btn-primary mt-2 mb-2">Submit</button>
                                              <form> 
                                    </div>
                                    <div class="border"></div>
                                </div>
                            </div>
        
                        </div>
        
                    </section><!--name edit part end-->
        
                    <section id="nameEditPart"><!--phone edit part-->
                        
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="profileDetails">
                                                <h3>Mobile Number <span class="profileSpan"><a href="">Change Number</a></span></h3>
                                                                                     
                                        </div>
                                        <div class="border"></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="phoneDetails pb-2">
                                            <form>
                                                <div class="form-group row">
                                                  <label for="inputEmail3" class="col-sm-2 col-form-label">Mobile</label>
                                                  <div class="col-sm-10">
                                                    <input type="phone" class="form-control" id="inputEmail3" placeholder="017xxxxxxxx" disabled>
                                                  </div>
                                                </div>
                                                <button type="submit" class="btn btn-primary mt-4">Submit</button>
                                                <form>   
                                        </div>
                                        <div class="border"></div>
                                    </div>
                                </div>
                            </div>
                        </section><!--phone edit part end-->
        
                        <section id="emailEditPart"><!--email edit part-->
                        
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="profileDetails">
                                                <h3>Email <span class="profileSpan"><a href="">Change Email</a></span></h3>
                                                                                     
                                        </div>
                                        <div class="border"></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="emailDetails pb-2">
                                            <form>
                                                <div class="form-group row">
                                                  <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                                                  <div class="col-sm-10">
                                                    <input type="email" class="form-control" id="inputEmail3" placeholder="k@g.c" disabled>
                                                  </div>
                                                </div>
                                                <button type="submit" class="btn btn-primary mt-4">Submit</button>
                                                <form>   
                                        </div>
                                        <div class="border"></div>
                                    </div>
                                </div>
                            </div>
                        </section><!--email edit part end-->
        
                        <section id="profilePictureEditPart"><!--profile picture edit part-->
                        
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="profileDetails">
                                                <h3>Profile Picture <span class="profileSpan"><a href="">Change picture</a></span></h3>
                                                                                     
                                        </div>
                                        <div class="border"></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="pictureDetails pb-2">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <form>
                                                        <div class="form-group row">
                                                          <label for="inputEmail3" class="col-sm-2 col-form-label">Picture</label>
                                                          <div class="col-sm-10">
                                                            <input type="file" class="form-control" id="inputEmail3" disabled>
                                                          </div>
                                                        </div>
                                                        <button type="submit" class="btn btn-primary mt-5">Submit</button>
                                                        <form>   
                                                </div>
                                                <div class="col-md-6">
                                                    <img class="img-fluid rounded" src="{{'assets/images/bird-1.jpg'}}" style="width: 230px;" alt="">        
           
                                                </div>
                                            </div>
                                                   
                                        </div>
                                        <div class="border"></div>
                                    </div>
                                </div>
                            </div>
                        </section><!--profile picture part end-->
        
                        <section id="passwordEditPart"><!--phone edit part-->
                        
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="profileDetails">
                                                <h3>PassWord <span class="profileSpan"><a href="">Change password</a></span></h3>
                                                                                     
                                        </div>
                                        <div class="border"></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="phoneDetails pb-2">
                                            <form>
                                                <div class="form-group row">
                                                  <label for="inputEmail3" class="col-sm-2 col-form-label">Password</label>
                                                  <div class="col-sm-10">
                                                    <input type="password" class="form-control" id="inputEmail3"  disabled>
                                                  </div>
                                                </div>
                                                <button type="submit" class="btn btn-primary mt-4">Submit</button>
                                                <form>   
                                        </div>
                                        <div class="border"></div>
                                    </div>
                                </div>
                            </div>
                        </section><!--phone edit part end-->
            </div>
        </div>
      </div>
    </div>
  </section>

@endsession
