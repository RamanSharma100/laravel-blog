<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>@yield('title') | Laravel Blog</title>
	<!-- MDB css -->
	<link rel="stylesheet" href="{{ asset('css/mdb.min.css') }}" />
</head>
<body>
	@include('layouts.header')
	@yield('content')
	<!-- MDB js -->
	<script src="{{ asset('js/mdb.min.js') }}" ></script>
</body>
</html>