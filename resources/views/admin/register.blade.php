<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Admin Registration</title>
	<!-- mdb css -->
	<link rel="stylesheet" href="{{ asset('css/mdb.min.css') }}" />
</head>
<body>
	
	<div class="container">
		@if(Session::has('success'))
		    <div class="alert alert-success my-3"> 
		    	{{ Session::get('success') }}
			</div>
		@endif
		@if(Session::has('error'))
		    <div class="alert alert-danger my-3"> 
		    	{{ Session::get('error') }}
			</div>
		@endif
		<div class="row" style="margin-top:10%;">
			<div class="col-md-4 offset-md-4">
				<h1 class="text-center font-weight-bold my-5">Register Admin</h1>
				<form action="{{ route('admin.register') }}" method="post" autocomplete="off">
					@csrf

					<div class="form-group my-2">
						<input type="text" name="name" class="form-control" placeholder="Name" value="{{ old('name') }}"/>
						@error('name') <p class="text-danger my-1 px-1">{{$message}}</p> @enderror
					</div>
					<div class="form-group my-2">
						<input type="text" name="username" class="form-control" placeholder="Username" value="{{ old('username') }}" />
						@error('username') <p class="text-danger my-1 px-1">{{ $message }}</p> @enderror
					</div>
					<div class="form-group my-2">
						<input type="text" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}" />
						@error('email')  <p class="text-danger my-1 px-1">{{ $message }}</p> @enderror
					</div>
					<div class="form-group my-2">
						<input type="password" name="password" class="form-control" placeholder="Password" value="{{ old('password') }}" />
						@error('password') <p class="text-danger my-1 px-1">{{ $message }}</p> @enderror
					</div>
					<div class="form-group my-2">
						<input type="password" name="confirmPass" class="form-control" placeholder="Confirm password" value="{{ old('confirmPass') }}" />
						@error('confirmPass') <p class="text-danger my-1 px-1">{{ $message }}</p> @enderror
					</div>
					<div class="form-group my-2">
						<input type="submit" class="btn btn-block btn-primary" value="Register" />
					</div>
				</form>

				<p class="text-right my-5"><a href="{{url('admin/dashboard')}}" >Back to Dashboard</a></p>
			</div>
		</div>
	</div>

	<!-- mdb script -->
	<script src="{{ asset('js/mdb.min.js') }}" ></script>
</body>
</html>