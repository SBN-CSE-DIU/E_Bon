@extends('users/layout/layout')

@section('content')
<section>
    
    <div class="container">

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <h1 class="bestproduct">BESTPRODUCT</h1>
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row d-flex align-items-center">
                        <div class="col-md-6 caption ">
                            <h1>Mack Book Pro</h1>
                            <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                when an unknown printer took a galley of type and scrambled it to make a type
                                specimen book</p>
                            <button class="buy-now">BUY NOW →</button>
                        </div>
                        <div class="col-md-6">
                            <img class="d-block w-100" src="{{('/assets/images/bird-1.jpg')}}" alt="First slide">
                        </div>
                    </div>
                </div>
                <div class="carousel-item ">
                    <div class="row d-flex align-items-center">
                        <div class="col-md-6 caption">
                            <h1>Mack Book Pro</h1>
                            <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                when an unknown printer took a galley of type and scrambled it to make a type
                                specimen book</p>
                            <button class="buy-now">BUY NOW →</button>
                        </div>
                        <div class="col-md-6">
                            <img class="d-block w-100 " style="width: 40px;" src="{{('/assets/images/bird-1.jpg')}}" alt="First slide">
                        </div>
                    </div>
                </div>
                <div class="carousel-item ">
                    <div class="row d-flex align-items-center">
                        <div class="col-md-6 caption">
                            <h1>Mack Book Pro</h1>
                            <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                when an unknown printer took a galley of type and scrambled it to make a type
                                specimen book</p>
                            <button class="buy-now">BUY NOW →</button>
                        </div>
                        <div class="col-md-6">
                            <img class="d-block w-100" src="{{('/assets/images/bird-1.jpg')}}" alt="First slide">
                        </div>
                    </div>
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
    </div>
</section>

<section class="product-secttion">
    <div class="container">
        <div class="smartphone-title pb-4 d-flex justify-content-between">
            <h3>Smart Phone</h1>
                <a class="see-all-a" href="">See all</a>
        </div>

        <div class="row justify-content-between">
            <div class="col-md-3">
                <div class="card_wrapper">
                    <div class="card" style="width: 16rem;">
                        <img class="card-img-top" src="{{('/assets/images/bird-1.jpg')}}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card_wrapper">
                    <div class="card" style="width: 16rem;">
                        <img class="card-img-top" src="{{('/assets/images/bird-1.jpg')}}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card_wrapper jus">
                    <div class="card" style="width: 16rem;">
                        <img class="card-img-top" src="{{('/assets/images/bird-1.jpg')}}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card_wrapper">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{('/assets/images/bird-1.jpg')}}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</section>
<section class="somthing">
    <div class="container">
        <h2 class="text-center pt-5 pb-5">Something</h2>
    </div>
</section>
<section class="product-secttion">
    <div class="container">
        <div class="smartphone-title pb-4 d-flex justify-content-between">
            <h3>Smart Phone</h1>
                <a class="see-all-a" href="">See all</a>
        </div>

        <div class="row justify-content-between">
            <div class="col-md-3">
                <div class="card_wrapper">
                    <div class="card" style="width: 16rem;">
                        <img class="card-img-top" src="{{('/assets/images/bird-1.jpg')}}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card_wrapper">
                    <div class="card" style="width: 16rem;">
                        <img class="card-img-top" src="{{('/assets/images/bird-1.jpg')}}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card_wrapper jus">
                    <div class="card" style="width: 16rem;">
                        <img class="card-img-top" src="{{('/assets/images/bird-1.jpg')}}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card_wrapper">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{('/assets/images/bird-1.jpg')}}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</section>

<section class="banner_logo">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="for_slick_slider multiple-items">
                    
                        <div class="items">
                            <img src="{{('/assets/images/brand_logo/1.jpg')}}" alt="">
                            <div class="overlay"></div>
                        </div>
            
                        <div class="items">
                            <img src="{{('/assets/images/brand_logo/1.jpg')}}" alt="">
                            <div class="overlay"></div>
                        </div>
            
                        <div class="items">
                            <img src="{{('/assets/images/brand_logo/1.jpg')}}" alt="">
                            <div class="overlay"></div>
                        </div>
            
                        <div class="items">
                            <img src="{{('/assets/images/brand_logo/1.jpg')}}" alt="">
                            <div class="overlay"></div>
                        </div>
            
                        <div class="items">
                            <img src="{{('/assets/images/brand_logo/1.jpg')}}" alt="">
                            <div class="overlay"></div>
                        </div>
            
                        <div class="items">
                            <img src="{{('/assets/images/brand_logo/1.jpg')}}" alt="">
                            <div class="overlay"></div>
                        </div>

                </div>
                
            </div>
            </div>
        </div>
        


</section>


@endsection
