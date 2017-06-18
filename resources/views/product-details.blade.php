@extends('layout')

@section('links')
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
@endsection

@section('styles')
   <style>    
      .product-details-image {
         width: 100%;
      }
      .body-container{
         margin-top: 20px;
         margin-bottom: 40px;
      }
      .about-product{
         height: 300px;
         background-color: #EEE;
      }
      .about-product-paragraph{
         padding-top: 20px;
      }
      .image{
         text-align: center;
         padding-top: 40px;
         border-right: 1px solid #EEE;
      }
      #tabs{
         height: 300px;
         font-size: 80%;
         background-color: #EEE;
      }
      #details-title{
         font-weight: bold;
         font-size: 100%;
      }
      .details{
         color: grey;
         font-size: 80%;
      }
      .tabs-titles{
         background-color: grey;
         color: white;
      }
      .form{
         margin-top: 20px;
         font-size: 80%;
      }
      .btn{
         background-color: #FF8067;
         color: white;
         font-size: 100%;
         margin-left: auto;
      }
      #related-products{
         font-size: 150%;
         color: grey;
         border-bottom: 1px solid #EEE;
      }
      .card-image{
         height: auto;
         width: 100%;
         margin: 0 auto;
      }
      .product-price{
         font-size: 150%;
         color: #FF8067;
         float: left;
         margin-right: 31px;
      }
   </style>
  @endsection

@section('content')
   <body>
      <div class="container body-container">

         <div class="row">
           <div class="image col-md-4">
             <img class="product-details-image col-md-5" src="../images/tshirt1.png">
           </div>

            <div class="col-md-8">

               <p id="details-title">Awesome Super slim red T-shirt</p>
               <p class="details">Availability: <span style="color: #FF8067">YES</span> (92 items in stock)</p>
               <p class="details">Manufacturer: Adidas</p>

               <div id="tabs">
                  <ul>
                    <li><a href="#fragment-1" class="tabs-titles"><span style="color: white; font-weight: bold;">More Info</span></a></li>
                    <li><a href="#fragment-2" class="tabs-titles"><span>Accessories</span></a></li>
                    <li><a href="#fragment-3" class="tabs-titles"><span>Comments</span></a></li>
                  </ul>
                  <div id="fragment-1">
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                  </div>
                  <div id="fragment-2">
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. 
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                  </div>
                  <div id="fragment-3">
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                  </div>
               </div>
               
               <div class="form">
                  <form class="form-inline">
                     <label class="mr-sm-2" for="size-select">Size</label>
                     <select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="size-select">
                       <option selected>XXL</option>
                       <option value="1">XL</option>
                       <option value="2">L</option>
                       <option value="3">M</option>
                       <option value="4">s</option>
                     </select>

                     <label class="mr-sm-2" for="color-select">Color</label>
                     <select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="color-select">
                       <option selected>Red</option>
                       <option value="1">Green</option>
                       <option value="2">Blue</option>
                       <option value="3">Yellow</option>
                       <option value="4">Black</option>
                     </select>

                     <label class="mr-sm-2" for="quantity-select">Quantity</label>
                     <select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="quantity-select">
                       <option selected>1</option>
                       <option value="1">2</option>
                       <option value="2">3</option>
                       <option value="3">4</option>
                       <option value="4">5</option>
                     </select>

                      <label style="margin-left: auto; font-size: 150%; color: #FF8067;" class="mr-sm-2">$49.99</label>

                     <button type="submit" class="btn"><i style="margin-right: 5px;" class="fa fa-shopping-cart" aria-hidden="true"></i> Buy this item</button>
                  </form>
               </div>
            </div>
         </div>

         <p id="related-products">Related products</p>
        
         <div class="cards row">
            <div class="card-deck">
               <div class="card col-md-3">
                  <img class="card-img-top card-image" src="../images/tshirt2.png" alt="Card image cap">
                  <div class="card-block">
                     <h4 class="card-title">Super Slim T-shirt</h4>
                     <p class="card-text product-price">$49.99</p>
                     <button class="btn shop-product"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Buy</button>
                  </div>
               </div>
               
               <div class="card col-md-3">
                  <img class="card-img-top card-image" src="../images/tshirt2.png" alt="Card image cap">
                  <div class="card-block">
                     <h4 class="card-title">Super Slim T-shirt</h4>
                     <p class="card-text product-price">$49.99</p>
                     <button class="btn shop-product"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Buy</button>
                  </div>
               </div>

               <div class="card col-md-3">
                  <img class="card-img-top card-image" src="../images/tshirt2.png" alt="Card image cap">
                  <div class="card-block">
                     <h4 class="card-title">Super Slim T-shirt</h4>
                     <p class="card-text product-price">$49.99</p>
                     <button class="btn shop-product"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Buy</button>
                  </div>
               </div>

               <div class="card col-md-3">
                  <img class="card-img-top card-image" src="../images/tshirt2.png" alt="Card image cap">
                  <div class="card-block">
                     <h4 class="card-title">Super Slim T-shirt</h4>
                     <p class="card-text product-price">$49.99</p>
                     <button class="btn shop-product"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Buy</button>
                  </div>
               </div>
            </div>
         </div>   
      </div>

      @section('scripts')
         <script src="//code.jquery.com/jquery-1.12.4.js"></script>
         <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
         <script>
            $(function(){
              $( "#tabs" ).tabs();  
            });
            $(function() {
              $( "#size" ).selectmenu();
              $( "#color" ).selectmenu();
              $( "#quantity").selectmenu();
            });   
       </script>
      @endsection   
  </body> 
@endsection