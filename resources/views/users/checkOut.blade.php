@extends('users.layout.layout')
@section('contents')
<section id="checkoutPart">

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="profileDetails">
                            <h3>My chart <span>3</span> <span class="float-right pr-4">Total: <span>120tk</span></span> </h3>
                        </div>
                        <div class="border"></div>
                    </div>
                </div>
            </div>

            <section>
                <div class="container">
                   <div class="cart">
                      <div class="col-md-12  mx-auto">
                         <div class="cardItemWrap">
                            <div class="cart-item">
                                <div class="row">
                                   <div class="col-md-7 center-item">
                                      <img src="images/product-1.png" alt="">
                                      <h5>iPhone 11 128GB Black</h5>
                                   </div>
              
                                   <div class="col-md-5 center-item">
                                      <div class="input-group number-spinner">
                                         <button onclick="handleProductChange('phone',false)" class="btn btn-default"><i class="fa fa-minus" aria-hidden="true"></i>
                                         </i></button>
                                         <input id="phone-count" type="text" class="form-control text-center" value="1">
                                         <button onclick="handleProductChange('phone',true)" class="btn btn-default"><i class="fa fa-plus" aria-hidden="true"></i>
                                         </i></button>
                                      </div>
                                      <h5>$ <span id="phone-total">1250</span> </h5>
                                      <img src="images/remove.png" alt="" class="remove-item">
                                   </div>
                                </div>
                             </div>
              
                             <div class="cart-item">
                                <div class="row">
                                   <div class="col-md-7 center-item mx-auto">
                                      <img src="images/product-2.png" alt="">
                                      <h5>iPhone 11 Silicone Case - Black</h5>
                                   </div>
                                   <div class="col-md-5 center-item">
                                      <div class="input-group number-spinner">
                                         <button onclick="handleProductChange('case',false)" class="btn btn-default"><i
                                               class="fas fa-minus"></i></button>
                                         <input id="case-count" type="text" class="form-control text-center" value="1">
                                         <button onclick="handleProductChange('case',true)" class="btn btn-default"><i
                                               class="fas fa-plus"></i></button>
              
                                      </div>
                                      <h5>$<span id="case-total">125</span></h5>
                                      <img src="images/remove.png" alt="" class="remove-item">
                                   </div>
                                </div>
                             </div>
              
                             
                         </div>
                      </div>
                   </div>
                </div>
             </section>  
        </div>

        <div class="col-md-4">
            <div  class="box">
                <h4>SubTotal: <span class="float-right">120Tk</span></h4>
                <h4>Tax:<span class="float-right">120Tk</span></h4>
                <h4>Total: <span class="float-right">120Tk</span></h4>
                <div class="buttonDiv"><button type="button" class="btn btn-primary mt-3 ">Confirm</button></div>
            </div>
    </div>
</div>
<script>
    function handleProductChange(product, isIncrease) {
       const productInput = document.getElementById(product + '-count');
       const productCount = parseInt(productInput.value);
       let productNewCount = productCount;
       if (isIncrease == true) {
          productNewCount = productCount + 1;
       }
       if (isIncrease == false && productCount > 0) {
          productNewCount = productCount - 1;
       }
       productInput.value = productNewCount;
       let productTotal = 0;
       if (product == 'phone') {
          productTotal = productNewCount * 1250;
       }
       if (product == 'case') {
          productTotal = productNewCount * 125;
       }

       document.getElementById(product + '-total').innerText = productTotal;
       calculateTotal();
    }

    function calculateTotal() {

       const phoneCount = inputValue('phone');
       const caseCount = inputValue('case');

       var totalAmount = phoneCount * 1250 + caseCount * 125;
       document.getElementById('totalPrice').innerText = totalAmount;

       const tax=Math.ceil(totalAmount*0.05);
       document.getElementById('tax').innerText=tax;
       const grandTotal=totalAmount+tax;
       document.getElementById('grandTotal').innerText=grandTotal;
       
    }

    function inputValue(product) {
       const productInput = document.getElementById(product + '-count');
       const productCount = parseInt(productInput.value);
       return productCount;
    }
 </script>

</section>
@endsection
