@extends('layouts/master')

@section('content')
<!--<h1>Hey {{$name}}</h1>-->

<ul>
	@foreach($records as $record)
   <li>{{$record->imagepath}}</li>
   @endforeach
</ul>


@endsection