<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>    
    <!--custom css-->
    
    <link rel="stylesheet" href="{{('/assets/css/style.css')}}">
    <title>Pets</title>
</head>

<body>

    <head>
        <section class="nav-section">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="#"><img src="images/logo.png" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Product</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="#">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </section>
    </head>
    <main>
        @yield('content')
            
        
 
    </main>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <p>Millions of people of all ages and from around the world are improving their lives with us</p>

                </div>
                <div class="col-md-3">
                    <h3 class="course-title">Course</h3>
                    <div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><a href="">Graphic Design</a></li>
                            <li class="list-group-item"><a href="">Web Design</a></li>
                            <li class="list-group-item"><a href="">Business</a></li>
                            <li class="list-group-item"><a href="">Marketing</a></li>
                            <li class="list-group-item"><a href="">Engineering</a></li>
                          </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <h3 class="course-title">Terms</h3>
                    <div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><a href="">Graphic Design</a></li>
                            <li class="list-group-item"><a href="">Web Design</a></li>
                            <li class="list-group-item"><a href="">Business</a></li>
                            <li class="list-group-item"><a href="">Marketing</a></li>
                            <li class="list-group-item"><a href="">Engineering</a></li>
                          </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <h3 class="course-title">UsefulLink</h3>
                    <div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><a href="">Graphic Design</a></li>
                            <li class="list-group-item"><a href="">Web Design</a></li>
                            <li class="list-group-item"><a href="">Business</a></li>
                            <li class="list-group-item"><a href="">Marketing</a></li>
                            <li class="list-group-item"><a href="">Engineering</a></li>
                          </ul>
                    </div>
                </div>
            </div>
        </div>
        <h6 class="text-center copy">Copyright &copy; 2020 Rokomari.com</h6>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://use.fontawesome.com/eb99b85877.js"></script>
    <script src="{{('/assets/js/custom.js')}}"></script>


</body>

</html>