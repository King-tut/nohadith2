@extends('layouts/master')
@section('content')
<ul>
	
</ul>
<br><hr>
<h2>New cestion</h2>
<br>
<form action='shop/login' method="POST">
	<input type="text" name="name" id="name">
	{{ csrf_field()}}
<button class="btn btn-success">Press</button>
</form>



@endsection