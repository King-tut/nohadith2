<script type="text/javascript" src=" {{URL::to('js/jquery.js')}} "></script>
<script type="text/javascript" src=" {{URL::to('js/bootstrap.js')}} "></script>

    
   <script type="text/javascript" src="{{URL::to('ckeditor/ckeditor.js')}}"></script>
   <script type="text/javascript" src="{{URL::to('ckfinder/ckfinder.js')}}"></script>
    
   <link rel="stylesheet" type="text/css" href="{{URL::to('src/css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{URL::to('css/bootstrap.css')}}">
@section('content')
<body style="background:linear-gradient(black,lightgray);">
<nav class="navbar navbar-default navbar-static-top" style="background: black; color:white;">
            <div class="container">
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
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
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
<div class="row">
<div class="col-md-3">
<ul id="side-bar" style="list-style: none;margin-bottom: 50px;  ">
                    <li class="active" style="list-style: none; padding-top: 10px; padding-bottom: 20px;" >
                        <a href="{{url('/badgirls')}}"><i class="fa fa-fw fa-dashboard"></i> Admin Dashboard</a>
                    </li>
                    <li style="list-style: none; padding-top: 10px; padding-bottom: 20px;">
                        <a href="{{url('/createblog')}}"><i class="fa fa-fw fa-bar-chart-o"></i> Create Blog</a>
                    </li>
                    <li style="list-style: none; padding-top: 10px; padding-bottom: 20px;">
                    
                        <a href="{{url('/manageposts')}}"><i class="fa fa-fw fa-table"></i> Manage Posts</a>
                    </li>
                    <li style="list-style: none; padding-top: 10px; padding-bottom: 20px;">
                        <a href="{{url('/manageusers')}}"><i class="fa fa-fw fa-edit"></i> Manage Users</a>
                    </li>
                    <li style="list-style: none; padding-top: 10px; padding-bottom: 20px;">
                        <a href="bootstrap-elements.html"><i class="fa fa-fw fa-desktop"></i> Bootstrap Elements</a>
                    </li>
                    <li style="list-style: none; padding-top: 10px; padding-bottom: 20px;">
                        <a href="bootstrap-grid.html"><i class="fa fa-fw fa-wrench"></i> Bootstrap Grid</a>
                    </li>
                    <li style="list-style: none; padding-top: 10px; padding-bottom: 20px;">
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Dropdown <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="#">Dropdown Item</a>
                            </li>
                            <li>
                                <a href="#">Dropdown Item</a>
                            </li>
                        </ul>
                    </li>
                    <li style="list-style: none; padding-top: 10px; padding-bottom: 20px;">
                        <a href="blank-page.html"><i class="fa fa-fw fa-file"></i> Blank Page</a>
                    </li>
                    <li style="list-style: none; padding-top: 10px; padding-bottom: 20px;">
                        <a href="index-rtl.html"><i class="fa fa-fw fa-dashboard"></i> RTL Dashboard</a>
                    </li>
                </ul>

</div>
  <div class="col-md-8">
    <h2 style="background: black; color:white;">Manage Posts</h2><br>
    <div class="panel panel-default">
  <div class="panel-heading main-color-bg" >
    <h3 class="panel-title ">Important User Analytics</h3>




 <div class="panel-body">
  <table class="table table-striped table-hover">
    <tr>
    <th>ID</th>
      <th>Title</th>
      <th>Edit</th>
      <th>Delete</th>
      </tr>
   @foreach($blogs as $b)
    <tr><td>{{$b->id}}</td><td>{{$b->title}}</td><td><button class="btn btn-warning edit"><a href="backend/editpost/{{$b->id}}}">Edit</a></button></td><td><button class="btn btn-danger delete"><a href="backend/manageposts/{{$b->id}}">Delete</a></button></td></tr>

@endforeach
</table>

  </div>



    </div>
    
  </div>

  </div>


  </div><!--end of Col-->

  <div class="container">
  <div class="col-md-8">
    <h2 style="background: black; color:white;">Manage Posts</h2><br>
    <div class="panel panel-default">
  <div class="panel-heading main-color-bg" >
    <h3 class="panel-title ">Important User Analytics</h3>




 <div class="panel-body">
  <table class="table table-striped table-hover">
    <tr>
    <th>ID</th>
      <th>Title</th>
      <th>Page Views</th>
      <th>Number of Comments</th>
      </tr>
   @foreach($blogs as $b)
    <tr><td>{{$b->id}}</td>
    <td>{{$b->title}}</td>
    <td>{{$b->hits}}</td>
    <td>{{$b->comments}}</td>

    @endforeach
    </tr>
  
</table>

  </div>
  
    



    </div>
    
  </div>

  

  </div><!--end of Col-->




 </div>


      
  
  

  





</div><!--end ROW 1-->
  
</body>






 