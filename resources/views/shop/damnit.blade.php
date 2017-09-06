@if(count($records) > 1)
@foreach($just as $r)
    <p>Posted By : {{$r->name}}</p>
    <p>{{$r->comment}}</p>
    <p>{{$r->created_at}}</p>
  @endforeach
  @else
  <h1>YOu fucked up</h1>
@endif

@foreach($fil as $f)
<p>This is the FIL !!!{{$f->comment}}</p>
@endforeach