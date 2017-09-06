<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Shopping Basket</title>

        <!-- Booststrap CDN -->
        <link rel="stylesheet" href="../../libraries/bootstrap/css/bootstrap.min.css">         
        <!-- Fonts -->
        <link rel="stylesheet" href="../../libraries/fontawesome/css/font-awesome.min.css">

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
                    <a class="fa fa-facebook" href="#" aria-hidden="true"></a>
                </li>

                <li class="nav-item social">
                    <a class="fa fa-twitter" href="#" aria-hidden="true"></a>
                </li>  
            </ul>    
        </div>
    </nav>


    <div class="container">
        <div class="card-deck">
            <div class="row">
                @foreach($products as $product)
                    <div class="card col-md-3">
                        <a href="{{ url('/products/'.$product->id) }}">
                          <img class="card-img-top center-block product-image" src="../../storage/app/{{ $product->productimage }}" alt="Card image cap">
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
    <!-- Scripts -->
    <script src="../../libraries/jquery.min.js"></script>
    {{-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script> --}}
    <script src="../../libraries//bootstrap/js/bootstrap.min.js"></script>
</body>
</html>       