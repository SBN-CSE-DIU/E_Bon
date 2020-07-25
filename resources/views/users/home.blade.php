<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- font awsome CSS -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- font custom CSS -->
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto menu-font">
                <li class="nav-item">
                    <a class="nav-link" href="#">Fish</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">CATS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">DOGS</a>
                </li>
            </ul>
            <i class="fa fa-shopping-cart shape circ" aria-hidden="true"></i>
            <a href="{{URL::to('/dd')}}" class="mx-3"><h5>{{ Auth::user()->name }}</h5></a>
        </div>
    </nav>
    <div class="container-fluid">

        <hr>
        <div class="row">
            <h2></h2>
        </div>

        <div class="row mx-5">
            @foreach($rows as $row)
                <div class="col-md-2 border m-2">
                    <div class="row">
                        <img src="{{ asset('product_image/'.$row->image) }}" alt="{{$row->image}}" height="75%" width="100%">
                    </div>
                    <div class="row mt-2 justify-content-center">
                        <center>
                            <h4 class="m-0">{{ $row->name }}</h4>
                            <h class="text-success">({{ 'Color: '.$row->color.', Age: '.$row->age }})</h>
                            <h3 class="text-success mt-3">Tk:{{ $row->price }}</h3>
                            <a href="#" class="btn btn-info px-4">Add to Cart</a>
                        </center>
                    </div>
                    <br>
                </div>
            @endforeach
        </div>

        <br>

    </div>
</body>
</html>
