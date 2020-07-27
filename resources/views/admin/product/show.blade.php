@extends('admin/layout/layout')
@section('content')
<div class="col-md-9">
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
                        <a href=""><img class="card-img-top" src="{{('/assets/images/bird-1.jpg')}}" alt="Card image cap"></a>
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
                        <a href=""><img class="card-img-top" src="{{('/assets/images/bird-1.jpg')}}" alt="Card image cap"></a>
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
                        <a href=""><img class="card-img-top" src="{{('/assets/images/bird-1.jpg')}}" alt="Card image cap"></a>
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
                    <button type="button" class="btn " data-toggle="modal" data-target=".bd-example-modal-lg"><img class="card-img-top" src="{{('/assets/images/bird-1.jpg')}}" alt="Card image cap"></button>
                        
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




<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
     <div class="container">
         <div class="row justify-content-center">
             <div class="col-md-12">
                <div class="item w-60">
                    <h2 class="pt-3 pb-3">Title</h2>
                    <img class="card-img-top" src="{{('/assets/images/bird-1.jpg')}}" alt="Card image cap">
                    <p>author</p>
                    <h3>Details</h3>
                    <h4>price</h4>
                </div>
             </div>
         </div>
     </div>
    </div>
  </div>
</div>
    
</div>
@endsection
