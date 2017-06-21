@extends('layout')

@section('content')
	<body>
		<div class="container" id="form-body" style="margin:100px auto 100px; width: 50%;">
			<form method="POST" action="{{url('/login')}}">
				{{ csrf_field() }}
			    <div class="form-group row">
			      	<label for="email" class="col-sm-2 col-form-label">Email</label>
			      	<div class="col-sm-10">
			        	<input type="email" class="form-control" id="email" name="email" placeholder="Email">
			      	</div>
			    </div>
			    <div class="form-group row">
			      	<label for="password" class="col-sm-2 col-form-label">Password</label>
			      	<div class="col-sm-10">
			        	<input type="password" class="form-control" id="password" name="password" placeholder="Password">
			      	</div>
			    </div>    

			    <div class="form-group row">
				    <div class="offset-sm-2 col-sm-10">
				        <button class="btn" style="background-color: #FF8067; color: #EEE;">Log in</button>
				    </div>
    			</div>
		 	</form>
		 	@include('errors')
		</div>
		

	</body>
@endsection