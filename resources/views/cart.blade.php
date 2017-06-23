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
      		@foreach($products as $product)
               @include('product-cart')
            @endforeach
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