<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Shopping Basket</title>

        <!-- Booststrap -->
        <link rel="stylesheet" href="../../libraries/bootstrap/css/bootstrap.min.css"> 
        <link rel="stylesheet" href="../../libraries/jquery-ui/jquery-ui.min.css">        
        <!-- Fonts -->
        <link rel="stylesheet" href="../../libraries/fontawesome/css/font-awesome.min.css">

        <!-- Styles -->
        <style>
           .social{
                float: right;
                margin-top: 8px;
                margin-right: 30px;
           }
           .login{
            margin-right: 50px;
           }
           .navbar{
                background-color: #FF8067; 
           }
           .navbar a{
                color: #FEF5E5;
           }
           .slider-image{
                height: 300px;
                margin: 0 auto;
           }
            .footer{
                background-color: #EEE;
                height: 300px;
                border-top: 3px solid #FF8067;
                border-bottom: 3px solid #FF8067;
                bottom: 0;
                margin: 0 auto;
            }
            .copy-right{
                background-color: #FF8067;
                text-align: right;
                height: 70px;
            }
            .sub-container{
                margin-top: 40px;
            }
            .copyright-paragraph{
                padding-top: 25px;
                font-size: 80%;
            }
            .footer-paragraph{
                margin-bottom: 50px;
            }
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
    </head>

    <body>

        <!-- Nav Bar-->
        <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <a class="navbar-brand" href="{{url('/')}}">Shopping Basket</a>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               
                <ul class="navbar-nav mr-auto">

                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/categories')}}">Categories</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/cart')}}"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart</a>
                    </li>
                </ul>
                
               
                <ul class="nav navbar-nav navbar-right ml-auto">
                   
                    @if(! Auth::check())
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/register')}}">Register</a>
                        </li>

                         <li class="nav-item login">
                            <a class="nav-link" href="{{url('/login')}}">Login</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a href="{{url('/logout')}}" class="nav-link" style="margin-right: 20px;">Logout, {{ Auth::user()->name }}</a>
                        </li>
                    @endif    


                    <li class="nav-item social">
                        <a class="fa fa-facebook" href="#" aria-hidden="true"></a>
                    </li>

                    <li class="nav-item social">
                        <a class="fa fa-twitter" href="#" aria-hidden="true"></a>
                    </li>  
                </ul>    
            </div>
        </nav>

        <!--BODY-->
         <div class="container body-container">
         <div class="row">
            <div class="image col-md-4">
               <img class="product-details-image col-md-5" src="../../storage/app/{{ $product->productimage }}">
            </div>

            <div class="col-md-8">

               <p id="details-title">{{$product->name}}</p>
               <p class="details">Availability: <span style="color: #FF8067">YES</span> ({{$product->stockquantity}} items in stock)</p>
               <p style="margin-left: auto; font-size: 150%; color: #FF8067;" class="mr-sm-2">${{$product->price}}</p>

               <div id="tabs">
                  <ul>
                    <li><a href="#fragment-1" class="tabs-titles"><span style="color: white; font-weight: bold;">Description</span></a></li>
                    <li><a href="#fragment-2" class="tabs-titles"><span style="color: white; font-weight: bold;">Specs</span></a></li>
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
               </div>
               
               <div class="form">
                  <form method="POST" action="{{url('/cart')}}" class="form-inline">  
                     {{csrf_field()}}
                     <button class="btn"><i style="margin-right: 5px;" class="fa fa-shopping-cart" aria-hidden="true"></i> Add to Cart</button>   
                  </form>
               </div>
            </div>
         </div>

         <p id="related-products">Related products</p>
        
         <div class="cards row">
            <div class="card-deck">
               <div class="card col-md-3">
                  <img class="card-img-top card-image" src="../../images/tshirt2.png" alt="Card image cap">
                  <div class="card-block">
                     <h4 class="card-title">Super Slim T-shirt</h4>
                     <p class="card-text product-price">$49.99</p>
                     <button class="btn shop-product"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Buy</button>
                  </div>
               </div>
               
               <div class="card col-md-3">
                  <img class="card-img-top card-image" src="../../images/tshirt2.png" alt="Card image cap">
                  <div class="card-block">
                     <h4 class="card-title">Super Slim T-shirt</h4>
                     <p class="card-text product-price">$49.99</p>
                     <button class="btn shop-product"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Buy</button>
                  </div>
               </div>

               <div class="card col-md-3">
                  <img class="card-img-top card-image" src="../../images/tshirt2.png" alt="Card image cap">
                  <div class="card-block">
                     <h4 class="card-title">Super Slim T-shirt</h4>
                     <p class="card-text product-price">$49.99</p>
                     <button class="btn shop-product"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Buy</button>
                  </div>
               </div>

               <div class="card col-md-3">
                  <img class="card-img-top card-image" src="../../images/tshirt2.png" alt="Card image cap">
                  <div class="card-block">
                     <h4 class="card-title">Super Slim T-shirt</h4>
                     <p class="card-text product-price">$49.99</p>
                     <button class="btn shop-product"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Buy</button>
                  </div>
               </div>
            </div>
         </div>   
      </div>
        
        <!--Footer-->
        <div class="footer">
            <div class="container">
                <div class="sub-container">
                    <div class="row">
                        <p class="col-md-4 footer-paragraph">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.
                        </p>

                        <p class="col-md-4 footer-paragraph">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.
                        </p>

                        <p class="col-md-4 footer-paragraph">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.
                        </p>
                    </div> 
                </div>       
            </div>
        </div>

        <div class="copy-right col-md-12">
            <div class="container">
                <p class="copyright-paragraph">copyright <i class="fa fa-copyright" aria-hidden="true"></i> 2017 Mohamed A. Khalil. All Rights reserved</p>
            </div>
        </div>
        
        <!-- Scripts -->
        <script src="../../libraries/jquery.min.js"></script>
        <script src="../../libraries/jquery-ui/jquery-ui.min.js"></script>
        <script src="../../libraries//bootstrap/js/bootstrap.min.js"></script>
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

    </body>
</html>
