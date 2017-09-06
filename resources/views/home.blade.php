<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Shopping Basket</title>

        <!-- Booststrap CDN -->
        <link rel="stylesheet" href="../libraries/bootstrap/css/bootstrap.min.css">         
        <!-- Fonts -->
        <link rel="stylesheet" href="../libraries/fontawesome/css/font-awesome.min.css">

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
       .dropdown .dropdown-menu a{
            color: #FF8067;
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
		.slider-image{
        height: 300px;
        margin: 0 auto;
       }
       .carousel-inner{
        background-color: #eee;
       }
       #slider{
        border-bottom: 3px solid #FF8067;
       }
       #testmonials{
        background-color: #FEF5E5;
        height: 120px;
        border-bottom: 3px solid #FF8067;
        text-align: center;
       }
       .testmonials-paragraph{
        padding-top: 45px;
        font-family: fantasy;
        font-size: 100%;
       }
       #happy-client{
        color: #FF8067;
        font-family: arial;
       }
        .card-deck{
            margin-top: 40px;
        }
        .product-image{
            height: auto;
            width: 100%;
            margin: 0 auto;
        }
        .row{
            margin-bottom: 30px;
        }
        .card-block{
        	text-align: center;
        }
        .shop-product{
          background-color: #FF8067;
          color: white;
          font-size: 80%;
        }
        .card-text{
            color: grey;
            font-size: 90%;
            /*margin-bottom: 40px;*/
        }
        .currency{
            font-size: 100%;
        	 color: #FF8067;
        	 margin: 5px auto;
        }
    </style>
</head>    

<body>
<nav class="navbar navbar-toggleable-md navbar-light bg-faded">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <a class="navbar-brand" href="{{url('/')}}">Shopping Basket</a>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               
                <ul class="navbar-nav mr-auto">

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="CategoriesDropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Categories
                        </a>
                        <div class="category-item dropdown-menu" aria-labelledby="CategoriesDropdownMenu">
                          @foreach($categories as $category)
                            <a class="dropdown-item" href="{{url('/categories/'.$category->id)}}">{{$category->name}}</a>
                          @endforeach
                        </div>
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
                        <a class="fa fa-facebook" href="https://www.facebook.com/iMohamedKhalil" target="new" aria-hidden="true"></a>
                    </li>

                    <li class="nav-item social">
                        <a class="fa fa-twitter" href="#" aria-hidden="true"></a>
                    </li>  
                </ul>    
            </div>
        </nav>

	<!--slider-->
    <div id="slider" class="carousel slide carousel-slider" data-ride="carousel">

        <ol class="carousel-indicators">
            <li data-target="" data-slide-to="0" class="active"></li>
            <li data-target="" data-slide-to="1"></li>
            <li data-target="" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner" role="listbox">

            <div class="carousel-item active">
                <img class="d-block img-fluid slider-image" src="../images/tshirt1.png" alt="First slide">
            </div>

            <div class="carousel-item">
                <img class="d-block img-fluid slider-image" src="../images/tshirt2.png" alt="Second slide">
            </div>

            <div class="carousel-item">
                <img class="d-block img-fluid slider-image" src="../images/tshirt1.png" alt="Third slide">
            </div>
        </div>

        <a class="carousel-control-prev" href="#slider" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#slider" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
	
	<!--Testmonials-->
    <div id="testmonials">
       <p class="testmonials-paragraph"> "Awesome Shop, Great clothes. I trust to buy from them and you should too... " <br><span id="happy-client">Mohamed A. Khalil, Happy Client</span></p>
    </div>
    
    <!--Products-->
    <div class="container">
        <div class="card-deck">
            <div class="row">
            	@foreach($products as $product)
              	    <div class="card col-md-3">
                        <a href="{{ url('/products/'.$product->id) }}">
                          <img class="card-img-top center-block product-image" src="../storage/app/{{ $product->productimage }}" alt="Card image cap">
                        </a>

                        <div class="card-block">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text currency">$ {{ $product->price }}</p>
                            <form method="GET" action="{{url('/cart')}}">
                              {{csrf_field()}}
                              <button class="btn shop-product"><i class="shop-cart fa fa-shopping-cart" aria-hidden="true"></i> Add to cart</button>
                            </form>
                        </div>
                    </div>
              	@endforeach  
            </div>
        </div>        
    </div>

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
                <p class="copyright-paragraph">Copyright <i class="fa fa-copyright" aria-hidden="true"></i> 2017 Mohamed A. Khalil. All Rights reserved</p>
            </div>
        </div>

        <!-- Scripts -->
        <script src="../libraries/jquery.min.js"></script>
        {{-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script> --}}
        <script src="../libraries//bootstrap/js/bootstrap.min.js"></script>
</body>
</html>

