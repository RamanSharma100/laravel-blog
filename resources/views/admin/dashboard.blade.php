@extends('admin.layouts.adminlayout')
@section('title','Admin Dashboard')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">

			<h1 class="text-center py-3 my-3">Welcome Admin, <strong class="text-dark">{{ Auth::user()->name }}</strong></h1>
			
		</div>
	</div>
</div>

@endsection