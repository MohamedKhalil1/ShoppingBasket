@extends('layout')

@section('content')
	<body>
		<div class="container" id="form-body" style="margin:100px auto 100px; width: 50%;">
			<form method="POST" action="{{url('/register')}}">
				{{csrf_field()}}
				<div class="form-group row">
			      	<label for="name" class="col-sm-2 col-form-label">Full Name</label>
			      	<div class="col-sm-10">
			        	<input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
			      	</div>
			    </div>

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
			      	<label for="password_confirmation" class="col-sm-2 col-form-label">Re-type Password</label>
			      	<div class="col-sm-10">
			        	<input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Password again">
			      	</div>
			    </div>    

			    <div class="form-group row">
				    <div class="offset-sm-2 col-sm-10">
				        <button class="btn" style="background-color: #FF8067; color: #EEE;">Register</button>
				    </div>
    			</div>
		 	</form>
		 	@include('errors')
		</div>	
	</body>
@endsection