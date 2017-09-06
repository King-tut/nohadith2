@extends('layouts/master')

@section('content')


<ul>
	@foreach($records as $record)
   <li>{{$record->title}}</li>
   @endforeach
</ul>

<h2>The count is {{$count}}</h2>

<form action="" method="POST"> 
	Name: <input type="text" name="name" id="name" class="form-control">
	Email: <input type="text" name="email" id="email" class="form-control">
	Password: <input type="text" name="password" id="password" class="form-control">
	<br>
	{{ csrf_field()}}
	<button class="btn btn-success">Press</button>

</form>

@endsection