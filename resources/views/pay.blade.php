@extends('layouts/admin/adminlayout')




@section('content')
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Bootstrap Admin Template</title>

    <!-- Bootstrap Core CSS -->
    <!--<link href="css/bootstrap.min.css" rel="stylesheet">-->

    <!-- Custom CSS -->
    <!--<link href="css/sb-admin.css" rel="stylesheet">-->

    <!-- Morris Charts CSS -->
    <!--<link href="css/plugins/morris.css" rel="stylesheet">-->

    <!--Custom Fonts-->
    <!--<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">-->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body style="background: linear-gradient(black, lightgray);">

    <div id="wrapper">





        
   <div class="col-md-7">
  <div class="panel panel-default">
  <div class="panel-heading" style="background:black;">
    <h3 class="panel-title">Website Overview</h3>
  </div>
  <div class="panel-body">
    <div class="col-md-3">
      <div class="well dash-box">
      <h2> <span class="glyphicon glyphicon-user" aria-hidden="true"></span> 203</h2>
        <h4>Users</h4>
      </div>
        
    </div>

     <div class="col-md-3">
      <div class="well dash-box">
      <h2> <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> 33</h2>
        <h4>Pages</h4>
      </div>
        
    </div>

     <div class="col-md-3">
      <div class="well dash-box">
      <h2> <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> 100</h2>
        <h4>Post</h4>
      </div>
        
    </div>

     <div class="col-md-3">
      <div class="well dash-box">
      <h2> <span class="glyphicon glyphicon-stats" aria-hidden="true"></span> 203</h2>
        <h4>Visitors</h4>
      </div>
        
    </div>


  </div>
</div>






            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            
       

        
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
   <!-- <script src="js/jquery.js"></script>-->

    <!-- Bootstrap Core JavaScript -->
    <!--<script src="js/bootstrap.min.js"></script>-->

    <!-- Morris Charts JavaScript--> 
    <!--<script src="js/plugins/morris/raphael.min.js"></script>--> 
    <!--<script src="js/plugins/morris/morris.min.js"></script>--> 
    <!--<script src="js/plugins/morris/morris-data.js"></script>-->

</body>

</html>

<!--<h2>Add new post</h2>
<form action="" method="POST">
<div class="form-group">
    <label>PageTitle</label>
    <input type="text" class="form-control" id="title" name="title" placeholder="page title">
  </div>

   <div class="form-group">
    <label>Meta Tags</label>
    <input type="text" class="form-control" name="metatags" placeholder="meta tags" id="metatags"> 
  </div>

  <div class="form-group">
    <label>Page Layout and Content</label>
    <textarea name="bodysmall" class="form-control main-color-bg" placeholder="page body" col="10" rows="10" id="bodysmall"></textarea> 
  </div>
<br>
 <button type="submit" class="btn btn-primary">Save changes</button>
 {{ csrf_field() }}

</form>-->


<script type="text/javascript">
  $(document).ready(function(){
  $('#btn').on('click', function(){
    alert('THis is some bs');

  });

  });





</script>
@endsection


