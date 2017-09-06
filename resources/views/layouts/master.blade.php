<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
	<title>@yield('title')</title>
	<script type="text/javascript" src=" {{URL::to('js/jquery.js')}} "></script>
	<link rel="stylesheet" type="text/css" href="{{URL::to('src/css/app.css') }}">
	<link rel="stylesheet" type="text/css" href="{{URL::to('css/bootstrap.css')}}">
	
	@yield('styles')
	
</head>
<body>
@include('partials.header')
<div class="container">
	@yield('content')
</div>

@yield('scripts')
</body>
</html>