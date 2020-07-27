@extends('users.layout.layout')
@section('contents')
<section id="item_part">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2">
                    <div class="productItem">
                        
                        <button type="button" class="bt" data-toggle="modal" data-target=".bd-example-modal-lg"><img class="img-fluid" src="{{('/assets/images/bird-1.jpg')}}" alt=""></button>
                        <h3>Title</h4>
                        <p><span>color:</span><span>red</span> <span>age:</span><span>12</span> </p>
                        <h5>price</h5>
                        
                        <button class="addToChartBtn">Add to chart</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <!-- Large modal -->
        <!-- <button type="button" class="bt" data-toggle="modal" data-target=".bd-example-modal-lg">Large modal</button> -->

        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <section class="pt-5 pb-4">
                <div class="container">
                  <div class="row">
                    <div class="col-md-6">
                     <img class="img-fluid" src="{{('/assets/images/bird-1.jpg')}}" style="height: 310px;" alt="">
                    </div>
                    <div class="col-md-6">
                      <div class="itemDetails">
                        <h2>Product name</h2>
                        <div class="rating pb-3">
                          <span class="fa fa-star checked"></span>
                          <span class="fa fa-star checked"></span>
                          <span class="fa fa-star checked"></span>
                          <span class="fa fa-star checked"></span>
                          <span class="fa fa-star"></span>
                          <span><a href="">4 rating</a> |</span>
                          <span><a href="">Write a Review</a></span>
                        </div>
                        <p class="priceShow pl-2">Price <span>$20</span></p>
                        <P class="pt-3 pb-3 pl-2">quanta <span>3</span></P>
                        <div class="row">
                          <div class="col-md-6"><button class="addToChartBtn">Add to chart</button></div>
                          <div class="col-md-6"><button class="addToChartBtn">Add to WishList</button></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
            </div>
          </div>
        </div>


    </section>
@endsection