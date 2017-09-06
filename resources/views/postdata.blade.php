<script type="text/javascript" src=" {{URL::to('js/jquery.js')}} "></script>
<script type="text/javascript" src=" {{URL::to('js/bootstrap.js')}} "></script>

    
   <script type="text/javascript" src="{{URL::to('ckeditor/ckeditor.js')}}"></script>
   <script type="text/javascript" src="{{URL::to('ckfinder/ckfinder.js')}}"></script>
    
   <link rel="stylesheet" type="text/css" href="{{URL::to('src/css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{URL::to('css/bootstrap.css')}}">
    <style type="text/css">
    .container{
      background: #bccce5;
      }
    ul li{
      list-style: none;
    }
    .dropdown{
     color:white;
    }
  
  .dropdown ul {
    list-style-type: none;
    padding: 0;
    margin: 0;
    background-color: black;

}

.dropdown li a {
    display: block;
    padding: 10px;
    text-align: center;
    color: #6b9eef;
}

.dropdown li a:hover {
    background-color: black;
}

.dropdown li {
    display: inline-block;
}
.fab-well{
  background: linear-gradient(white, #6b9eef);
}

.dropbutton:hover .droplinks{
    /*Cause the div to be displayed only when a website visitor hovers their mouse over the list item containing the div*/
    display: block;
} 

.droplinks {
    /*Break the div out of the layout flow of the list*/
    position: absolute;
    /*Give the div a background color and width*/
    background-color: black;
    min-width: 140px;
    /*Hide the div from view*/
    display: none;
}

.droplinks a {
    /*Match the padding applied to the other menu items*/
    padding: 10px;
    /*For the links to each fill a complete row in the containing div*/
    display: block;
}


.sub-droplinks{
  position: absolute;
    /*Give the div a background color and width*/
    background-color: black;
    min-width: 140px;
    /*Hide the div from view*/
    display: none;

}

.sub-dropbutton:hover .sub-droplinks {
    /*Match the padding applied to the other menu items*/
    padding: 10px;
    /*For the links to each fill a complete row in the containing div*/
    display: block;
}

.sub-droplinks a{
  display: block;
}

.fab-well{
  background: linear-gradient(white, #6b9eef);
}

#footer{
  background: #333333;
  color:#ffffff;
  text-align: center;
  padding: 30px;
  margin-top: 30px;
  height: 300px;
}


</style>
 @section('content')
 
 <body style="background:linear-gradient(lightgray, white); ">

<nav class="navbar navbar-default navbar-static-top" style="background: black; color:white; ">
            <div class="container" style="background: black;">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        Home 
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                         <li class="dropbutton"><a href="" style="color: #6b9eef;">Authority of Quran</a> 
         <div class="droplinks">
         @foreach($authority as $a)
        <a href="{{$a->id}}">{{$a->title}}</a>

        @endforeach  
        
             
            </div>
        
  </li><!--end of Categories-->
          
        <!--Add a class to the list item with the drop menu-->
        <li class="dropbutton"><a href="" style="color: #6b9eef;">Falsehood of sunnah</a> 
         <div class="droplinks">
         @foreach($falsesunnah as $a)
        <a href="{{$a->id}}">{{$a->title}}</a>

        @endforeach  
        
             
            </div>
        
  </li>
        <li class="dropbutton"><a href="" style="color: #6b9eef;">Children of Israel</a> 
         <div class="droplinks">
         @foreach($children as $a)
        <a href="{{$a->id}}">{{$a->title}}</a>

        @endforeach  
        
             
            </div>
                            <li><a href="{{ route('login') }}" style="color: white;">Login</a></li>
                            <li><a href="{{ route('register') }}" style="color: white;">Register</a></li>
                        
                        @else
                         <div class="dropdown" style="float:left; margin-top: 12px; margin-right: 12px;">
  
  <ul>
             
      <!--Add a class to the list item with the drop menu-->
        <li class="dropbutton"><a href="">Authority of Quran</a> 
         <div class="droplinks">
         @foreach($authority as $a)
        <a href="{{$a->id}}">{{$a->title}}</a>

        @endforeach  
        
             
            </div>
        
  </li><!--end of Categories-->
          
        <!--Add a class to the list item with the drop menu-->
        <li class="dropbutton"><a href="">Falsehood of sunnah</a> 
         <div class="droplinks">
         @foreach($falsesunnah as $a)
        <a href="{{$a->id }}">{{$a->title}}</a>

        @endforeach  
        
             
            </div>
        
  </li>
        <li class="dropbutton"><a href="">Children of Israel</a> 
         <div class="droplinks">
         @foreach($children as $a)
        <a href="{{$a->id}}">{{$a->title}}</a>

        @endforeach  
        
             
            </div>
        
  </li> 
    </ul>
</div>







                            <li class="dropdown">
                                <a style="color:white; background: black" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>


<div class="container">

<div class="row">
<div class="col-md-12 col-xs-12 col-lg-10 col-sm-10">
  <img src="../src/images/main/{{$single->pic}}" style="max-height: 300px; min-width:100%;" >
  <br>
 <p style="background: white; font-weight: bold; width: 200px; margin-top: 30px;" > Title {{$single->title}}</p>
  <br>
 <p style="background: white; font-weight: bold; width: 200px;">Posted on  <?php echo preg_replace('/(\d\d\d\d)-(\d\d)-(\d\d)/', '${2}-${3}-${1}',$single->created_at) ?> </p>
 <br><br>


<!-- AddToAny BEGIN -->
<div class="a2a_kit a2a_kit_size_32 a2a_default_style">
<a class="a2a_dd" href="https://www.addtoany.com/share"></a>
<a class="a2a_button_facebook"></a>
<a class="a2a_button_twitter"></a>
<a class="a2a_button_google_plus"></a>
</div>
<script async src="https://static.addtoany.com/menu/page.js"></script>
<!-- AddToAny END -->
</div>





<div class="col-md-8 col-xs-8">
 <?php 
 

  echo $single->bodysmall;?>
</div>



<div class="col-md-4 col-xs-4" style=" margin-top: 30px;">
<h3>Featured Posts</h3>
 @foreach($favfive as $five)
 <div class="thumbnail fab-well">
      <img src="../src/images/main/{{$five->pic}}" alt="..."  style="max-height: 140px; max-width: 200px;">
      <div class="caption">
     <p style="font-weight: bold; font-size: 16px;">{{$five->title}}</p>
     {{$five->description}}
     <a href="{{$five->id}}" style="color:white">....Read More</a>
  
</div>
 </div>
 <br>
 @endforeach

</div>

</div><!--ebd of riw-->




<br><hr>

<section >

	<div class="row">
	<div class="col-md-6 col-xs-6"> 
		


<h2 style="margin-bottom: 25px;" >
    Leave a comment 
</h2>
<form action="" method="POST" style="margin-top: 25px;">
    

 <textarea id="comment" name="comment" class="comment-box" cols="60" rows="10">
     

 </textarea>
  {{ csrf_field() }}
  <input type="hidden" name="pageid" id="pageid" value="{{$single->id}}">
 <br>
 @if(Auth::guest())
  <h4 id="not-logged" style=": 20px;"><strong><p>If you want to leave a comment or subscribe to our news letter you must <a href="{{route('register')}}">register</a> or <a href="{{route('login')}}">login</a> </p></strong></h4><hr>
  @else
  <button class="btn btn-success" id="comment-btn" style="margin-top: 20px;">Add Comment</button>
  @endif
</form>
 @if($fil)
<div style="background-color: white;">
   @foreach($fil as $f)
 <p class="name" style="background:lightblue">Posted By: {{$f->name}}</p>
      <p class="comment">{{$f->comment}}</p> 
    <p class="time" style="margin-bottom: 10px;">{{$f->created_at}}</p>

@endforeach
</div>
 @else

 <h2>There are no comments</h2>
@endif
	</div><!--end COL 1-->
		
	</div><!--end ROW-->


</section>

<footer id="footer">
  

</footer>
</div><!--end container-->
<script type="text/javascript">
  $(document).ready(function(){
   
   $('.sub-dropbutton').mouseenter(function(){
     $('.sub-droplinks').css('display', 'block');
    
    $('.sub-droplinks').mouseout(function(){
     $('.sub-dropbutton').css('display', 'hide');
    
   
   });
   });




  });



</script>
</body>
