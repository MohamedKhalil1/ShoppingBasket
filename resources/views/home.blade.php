@extends('layout')

@section('styles')
	<style>
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
            height: 200px;
            width: 100%;
            margin: 0 auto;
        }
        .row{
            margin-bottom: 30px;
        }
        .shop-product{
          margin-right: 33px;
          margin-bottom: 10px;
          position: absolute;
          bottom: 0;
          width: 40%;
          text-align: center;
          background-color: #FF8067;
          color: white;
        }
        .like-product{
          position: absolute;
          margin-left: 120px;
          margin-bottom: 10px;
          bottom: 0;
          width: 20%;
          background-color: #EEE;
        }
        .heart{
            color: grey;
        }
        .card-text{
            color: grey;
            font-size: 90%;
            margin-bottom: 40px;
        }
        .currency{
            color: #FF8067;
            font-weight: bold;
            font-size: 100%;
            margin-top: -30px;
        }
    </style>
@endsection
@section('content')
	<body>
		<!--slider-->
	    <div id="slider" class="carousel slide carousel-slider" data-ride="carousel">

	        <ol class="carousel-indicators">
	            <li data-target="#slider" data-slide-to="0" class="active"></li>
	            <li data-target="#slider" data-slide-to="1"></li>
	            <li data-target="#slider" data-slide-to="2"></li>
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
	                <div class="card col-md-3">
	                    <img class="card-img-top center-block product-image" src="../images/tshirt2.png" alt="Card image cap">
	                    <div class="card-block">
	                        <h5 class="card-title">Super Slim T-shirt</h5>
	                        <p class="card-text">Adidas</p>
	                        <p class="card-text currency">$50</p>
	                        <button class="btn shop-product"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Shop</button>
	                        <button class="btn like-product"><span class="heart"><i class="fa fa-heart" aria-hidden="true"></span></i></button>
	                    </div>
	                </div>
	                 <div class="card col-md-3">
	                    <img class="card-img-top product-image" src="../images/tshirt2.png" alt="Card image cap">
	                    <div class="card-block">
	                        <h5 class="card-title">Super Slim T-shirt</h5>
	                        <p class="card-text">Adidas</p> 
	                        <p class="card-text currency">$50</p>
	                        <button class="btn shop-product"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Shop</button>
	                        <button class="btn like-product"><span class="heart"><i class="fa fa-heart" aria-hidden="true"></span></i></button>
	                    </div>
	                </div>
	                <div class="card col-md-3">
	                    <img class="card-img-top product-image" src="../images/tshirt2.png" alt="Card image cap">
	                    <div class="card-block">
	                        <h5 class="card-title">Super Slim T-shirt</h5>
	                        <p class="card-text">Adidas</p>
	                        <p class="card-text currency">$50</p>
	                        <button class="btn shop-product"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Shop</button>
	                        <button class="btn like-product"><span class="heart"><i class="fa fa-heart" aria-hidden="true"></span></i></button>
	                    </div>
	                </div>
	                <div class="card col-md-3">
	                    <img class="card-img-top center-block product-image" src="../images/tshirt2.png" alt="Card image cap">
	                    <div class="card-block">
	                        <h5 class="card-title">Super Slim T-shirt</h5>
	                        <p class="card-text">Adidas</p>
	                        <p class="card-text currency">$50</p>
	                        <button class="btn shop-product"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Shop</button>
	                        <button class="btn like-product"><span class="heart"><i class="fa fa-heart" aria-hidden="true"></span></i></button>
	                    </div>
	                </div>
	            </div>
	            <div class="row">    
	                 <div class="card col-md-3">
	                    <img class="card-img-top product-image" src="../images/tshirt2.png" alt="Card image cap">
	                    <div class="card-block">
	                        <h5 class="card-title">Super Slim T-shirt</h5>
	                        <p class="card-text">Adidas</p> 
	                        <p class="card-text currency">$50</p> 
	                        <button class="btn shop-product"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Shop</button>
	                        <button class="btn like-product"><span class="heart"><i class="fa fa-heart" aria-hidden="true"></span></i></button>
	                    </div>
	                </div>
	                <div class="card col-md-3">
	                    <img class="card-img-top product-image" src="../images/tshirt2.png" alt="Card image cap">
	                    <div class="card-block">
	                        <h5 class="card-title">Super Slim T-shirt</h5>
	                        <p class="card-text">Adidas</p>
	                        <p class="card-text currency">$50</p> 
	                        <button class="btn shop-product"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Shop</button>
	                        <button class="btn like-product"><span class="heart"><i class="fa fa-heart" aria-hidden="true"></span></i></button>
	                    </div>
	                </div> 
	                 <div class="card col-md-3">
	                    <img class="card-img-top product-image" src="../images/tshirt2.png" alt="Card image cap">
	                    <div class="card-block">
	                        <h5 class="card-title">Super Slim T-shirt</h5>
	                        <p class="card-text">Adidas</p>
	                        <p class="card-text currency">$50</p> 
	                        <button class="btn shop-product"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Shop</button>
	                        <button class="btn like-product"><span class="heart"><i class="fa fa-heart" aria-hidden="true"></span></i></button>
	                    </div>
	                </div> 
	                <div class="card col-md-3">
	                    <img class="card-img-top product-image" src="../images/tshirt2.png" alt="Card image cap">
	                    <div class="card-block">
	                        <h5 class="card-title">Super Slim T-shirt</h5>
	                        <p class="card-text">Adidas</p>
	                        <p class="card-text currency">$50</p> 
	                        <button class="btn shop-product"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Shop</button>
	                        <button class="btn like-product"><span class="heart"><i class="fa fa-heart" aria-hidden="true"></span></i></button>
	                    </div>
	                </div>     
	            </div>
	        </div>        
	    </div>
    </body 
@endsection