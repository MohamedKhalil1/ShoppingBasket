<div class="card col-md-3">
	<a href="{{ url('/products/'.$product->id) }}">
    	<img class="card-img-top center-block product-image" src="../images/{{ $product->productimage }}" alt="Card image cap">
    </a>
    <div class="card-block">
            <h5 class="card-title">{{ $product->name }}</h5>
            <p class="card-text currency">$ {{ $product->price }}</p>
            <form method="POST" action="{{url('/cart')}}">
            	{{csrf_field()}}
            	<button class="btn shop-product"><i class="shop-cart fa fa-shopping-cart" aria-hidden="true"></i> Add to cart</button>
            </form>
    </div>
</div>