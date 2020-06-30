<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- font awsome CSS -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- font custom CSS -->
    <link rel="stylesheet" href="{{('assets/css/style.css')}}">
    <title>PET</title>
  </head>
  <body>
    <head>
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto menu-font">
                <li class="nav-item active">
                  <a class="nav-link" href="#">SHOP ALL </span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Fish & AQUATICS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">CATS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">DOGS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">SMALL ANIMALS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">ABOUT US</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">CONTACT US</a>
                </li>
                
              </ul>
              <form class="form-inline my-2 my-lg-0 icon-shape">
                <i class="fa fa-user-circle-o shape" aria-hidden="true"><a href="{{URL::to('/dd')}}"><span>Admin Panel</span></a></i>
                <i class="fa fa-shopping-cart shape circ" aria-hidden="true"></i><span> 0</span> 
    
    
              </form>
            </div>
          </nav>
    </head> 
    
    <main>
        <section><!--slider part start-->
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100 img-fluid" src="{{('assets/images/rabbit-2174679_1920.jpg')}}" style="height: 900px;" alt="First slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100 img-fluid" src="{{('assets/images/dog1.jpg')}}" style="height: 900px;" alt="Second slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100 img-fluid" src="{{('assets/images/fish-1.jpg')}}" style="height: 900px;" alt="Third slide">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
        </section><!--slider part End-->
        <section class="pt-4 pb-4"><!--colum part End-->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4">
                        <div class="content p-4">
                            <img class="img-fluid" src="{{('assets/images/dog1.jpg')}}" alt="">
                        </div>
                        <div class="content-text">
                            <h3>Dogs</h3>
                            <p>I am a title. Click here</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>  
                    <div class="col-md-4">
                        <div class="content p-4">
                            <img class="img-fluid" src="{{('assets/images/dog1.jpg')}}" alt="">
                        </div>
                        <div class="content-text">
                            <h3>Dogs</h3>
                            <p>I am a title. Click here</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div> 
                    <div class="col-md-4">
                        <div class="content p-4">
                            <img class="img-fluid" src="{{('assets/images/dog1.jpg')}}" alt="">
                        </div>
                        <div class="content-text">
                            <h3>Dogs</h3>
                            <p>I am a title. Click here</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div> 
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="content p-4">
                            <img class="img-fluid" src="{{('assets/images/dog1.jpg')}}" alt="">
                        </div>
                        <div class="content-text">
                            <h3>Dogs</h3>
                            <p>I am a title. Click here</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                    <div class="col-md-8 h">
                        <div class="content p-4">
                            <img class=" s" src="{{('assets/images/dog-2.jpg')}}" alt="">
                        </div>
                        <div class="content-text">
                            <h3>Dogs</h3>
                            <p>I am a title. Click here</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="row botom-pading">
                    <div class="col-md-8 h">
                        <div class="content p-4">
                            <img class=" s" src="{{('assets/images/dog-2.jpg')}}" alt="">
                        </div>
                        <div class="content-text">
                            <h3>Dogs</h3>
                            <p>I am a title. Click here</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="content p-4">
                            <img class="img-fluid" src="{{('assets/images/dog1.jpg')}}" alt="">
                        </div>
                        <div class="content-text">
                            <h3>Dogs</h3>
                            <p>I am a title. Click here</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="dorder"></div>
            </div>
        </section><!--colum part End-->

        <div class="container-fluid">
            <div class="title ">
                <h2>Our Product</h2>
                <hr>

            </div>
            <div class="row ">
                <div class="chart d-flex ml-4 p-4 text-center">
                    <div class="card" style="width: 20rem;">
                        <img class="card-img-top" src="{{('assets/images/product.jpg')}}" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Perfect Mog</h5>
                          <p class="card-text">$ 6.00</p>
                          <input type="text">
                          <a href="#" class="btn btn-primary mt-4">Add to Chart</a>
                        </div>
                      </div>
                </div>

                <div class="chart d-flex p-4 text-center">
                    <div class="card" style="width: 20rem;">
                        <img class="card-img-top" src="{{('assets/images/product.jpg')}}" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Perfect Mog</h5>
                          <p class="card-text">$ 6.00</p>
                          <input type="text">
                          <a href="#" class="btn btn-primary mt-4">Add to Chart</a>
                        </div>
                      </div>
                </div>

                <div class="chart d-flex p-4 text-center">
                    <div class="card" style="width: 20rem;">
                        <img class="card-img-top" src="{{('assets/images/product.jpg')}}" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Perfect Mog</h5>
                          <p class="card-text">$ 6.00</p>
                          <input type="text">
                          <a href="#" class="btn btn-primary mt-4">Add to Chart</a>
                        </div>
                      </div>
                </div>

                <div class="chart d-flex p-4 text-center">
                    <div class="card" style="width: 20rem;">
                        <img class="card-img-top" src="{{('assets/images/product.jpg')}}" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Perfect Mog</h5>
                          <p class="card-text">$ 6.00</p>
                          <input type="text">
                          <a href="#" class="btn btn-primary mt-4">Add to Chart</a>
                        </div>
                      </div>
                </div>

                <div class="chart d-flex p-4 text-center">
                    <div class="card" style="width: 20rem;">
                        <img class="card-img-top" src="{{('assets/images/product.jpg')}}" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Perfect Mog</h5>
                          <p class="card-text">$ 6.00</p>
                          <input type="text">
                          <a href="#" class="btn btn-primary mt-4">Add to Chart</a>
                        </div>
                      </div>
                </div>
            </div>
            <div class="shopall-btn text-center pt-4 pb-4">
                <a href="#" class="btn btn-primary mt-4 ">Add to Chart</a>
            </div>
        </div>
        <div class="parallax ">
            <div class="row h-100">
                <div class="col-md-12 align-self-center">
                    <h2 class="text-center">HEllo</h2>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h2>Our Flagship Store</h2>
                    <p>500 Terry Francois Street</p>
                </div>
            </div>
        </div>
    </footer>
    



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>