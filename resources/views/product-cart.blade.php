<div class="container py-3">
    <div class="card">
      	<div class="row ">
	        <div class="col-md-4">
            	<img class="product-details-image col-md-5 w-100" src="../images/tshirt1.png">
	        </div>
	        
        	<div class="col-md-8 px-3">
	            <div class="card-block px-3">
	              <p id="details-title">{{$product->name}}</p>
					<p class="details">Condition: New</p>
	            </div>

	            <div class="form">
	          	<form class="form-inline">
	                	<label class="mr-sm-2" for="quantity-select">{{$product->stockquantity}}</label>

	                	<select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="quantity-select">
	              		<option selected>1</option>
	              		<option value="1">2</option>
	              		<option value="2">3</option>
	              		<option value="3">4</option>
	              		<option value="4">5</option>
	                	</select>

	                	<label style="margin-left: auto; font-size: 150%; color: #FF8067;" class="mr-sm-2">{{$product->price}}</label>
	                	<button type="submit" class="btn"><i style="margin-right: 5px;" class="fa fa-shopping-cart" aria-hidden="true"></i> Buy this item</button>
	          	</form>
	      		</div>

				<div class="footer-card">
				    <a style="border-right: 2px solid #EEE; padding-right: 10px; float: left;" href="{{url('/')}}">Save for later</a>
				    <form>
				  			<a style="padding-left: 10px;" href="{{url('cart/delete')}}">Delete</a>
				    </form>   
			    </div>
			</div>	
		</div>
 	</div>
</div>	