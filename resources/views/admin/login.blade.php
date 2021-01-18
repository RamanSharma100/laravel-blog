<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Admin Login</title>
	<!-- mdb css -->
	<link rel="stylesheet" href="{{ asset('css/mdb.min.css') }}" />
</head>
<body>
	
	<div class="container">
		<div class="row" style="margin-top:10%;">
			@if(Session::has('success'))
			    <div class="alert alert-success my-3"> 
			    	{{ Session::get('success') }}
				</div>
			@endif
			@if(Session::has('loginError'))
			    <div class="alert alert-danger my-3"> 
			    	{{ Session::get('loginError') }}
				</div>
			@endif
			<div class="col-md-4 offset-md-4">
				<h1 class="text-center font-weight-bold my-5">Login Admin</h1>
				<form action="{{ route('admin.login') }}" method="post" autocomplete="off">
					@csrf
					
					<div class="form-group my-2">
						<input type="text" name="username" class="form-control" placeholder="Username" />
						@error('username') <p class="text-danger my-1 px-1">{{$message}}</p> @enderror
					</div>
					<div class="form-group my-2">
						<input type="password" name="password" class="form-control" placeholder="Password" />
						@error('password') <p class="text-danger my-1 px-1">{{$message}}</p> @enderror
					</div>
					<div class="form-group my-2">
						<input type="submit" class="btn btn-block btn-primary" value="Login" />
					</div>
				</form>

				<p class="text-right my-5"><a href="{{url('admin/forgotPass')}}" >Forgot password ?</a></p>
			</div>
		</div>
	</div>

	<!-- mdb script -->
	<script src="{{ asset('js/mdb.min.js') }}" ></script>
</body>
</html>