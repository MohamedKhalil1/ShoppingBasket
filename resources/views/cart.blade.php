@extends('layout')

@section('styles')
   <style>    
	
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
         margin-bottom: 50px;
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
  @endsection

@section('content')

	<body>
      	<div class="container body-container">
      		<div class="container py-3">
			    <div class="card">
			      	<div class="row ">
				        <div class="col-md-4">
			            	<img class="product-details-image col-md-5 w-100" src="../images/tshirt1.png">
				        </div>
			        	<div class="col-md-8 px-3">
			            <div class="card-block px-3">
		                  <p id="details-title">Awesome Super slim red T-shirt</p>
            				<p class="details">Manufacturer: Adidas</p>
            				<p class="details">Condition: New</p>
            				<p class="details">Color: Red</p>
			            </div>

			            <div class="form">
	                  	<form class="form-inline">
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
                     
              			<div class="footer-card">
	              			<a style="border-right: 2px solid #EEE; padding-right: 10px;" href="{{url('/')}}">Save for later</a>
	              			<a style="padding-left: 5px;" href="#">Delete</a>
						   </div>
			        	</div>	
			    	</div>
			 	</div>
			</div>
  		</div>
	</body>
@endsection

@section('scripts')
	<script src="//code.jquery.com/jquery-1.12.4.js"></script>
        <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script>
            $(function() {
              $( "#quantity").selectmenu();
            });   
        </script>
@endsection