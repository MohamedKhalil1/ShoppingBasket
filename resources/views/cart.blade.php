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
       .slider-image{
            height: 300px;
            margin: 0 auto;
       }
       .dropdown .dropdown-menu a{
            color: #FF8067;
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
      .body-container{
         margin-top: 20px;
         margin-bottom: 40px;
      }
  
      .col-md-4{
      	margin: auto;
      	display: block;
      	text-align: center;
      }
      
      .image{
         text-align: center;
         padding-top: 40px;
         border-right: 1px solid #EEE;
      }
     
      #details-title{
         font-weight: bold;
         font-size: 100%;
         margin-bottom: 30px;
      }
      .details{
         color: grey;
         font-size: 80%;
      }
     
      .form{
         margin: 20px 20px 20px 0px;
         font-size: 80%;
         border-bottom: 1px solid #EEE;
         padding-bottom: 10px;
      }
      .btn{
         background-color: #FF8067;
         color: white;
         font-size: 100%;
         margin-left: auto;
      } 
      .footer{
      	margin-top: 400px;
      } 
      .footer-card{
      	font-size: 80%;
      	margin-bottom: 10px;
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
                    <a class="nav-link dropdown-toggle" href="http://example.com" id="CategoriesDropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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

      	<div class="container body-container">
      		@foreach($products as $product)
               @include('product-cart')
            @endforeach
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
                <p class="copyright-paragraph">copyright <i class="fa fa-copyright" aria-hidden="true"></i> 2017 Mohamed A. Khalil. All Rights reserved</p>
            </div>
        </div>
       <script src="//code.jquery.com/jquery-1.12.4.js"></script>
       <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
       <script src="../libraries//bootstrap/js/bootstrap.min.js"></script>
       <script>
          $(function() {
            $( "#quantity").selectmenu();
          });   
       </script>
    </body>
  </html>