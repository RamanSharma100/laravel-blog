@extends('admin.layouts.adminlayout')
@section('title','Admin Dashboard')

@section('content')
<div class="container">
	<div class="row">
		<h1 class="text-center py-3 my-3">Welcome Admin, <strong class="text-dark">{{ Auth::user()->name }}</strong></h1>
		<div class="col-md-10 d-flex mx-auto my-5">

			<div class="col-md-4 p-4 mr-3 shadow">
				<h1 class="font-weight-bold text-center">Uploads</h1>
				<p class="display-1 text-center">0</p>
			</div>
			<div class="col-md-4 p-4 mr-3 shadow">
				<h1 class="font-weight-bold text-center">Users</h1>
				<p class="display-1 text-center">0</p>
			</div>
			<div class="col-md-4 p-4 mr-3 shadow">
				<h1 class="font-weight-bold text-center">Views</h1>
				<p class="display-1 text-center">0</p>
			</div>


		</div>
	</div>
</div>

@endsection