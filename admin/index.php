<?php 
session_start();
include('../connection.php');
$admin= $_SESSION['admin'];
if($admin=="")
{
header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../bmslogo.png">

    <title>Online Notice Board Admin Dashboard</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css"
    />

    <!-- Custom styles for this template -->
    <link href="../css/dashboard.css" rel="stylesheet">

   
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
    .panel-body{
      background-color: #dae1e7;
      font-size:30px;
    }
    </style>
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#" style="font-family: Impact, Charcoal, sans-serif;font-size:30px;">Welcome Admin !</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
           
            <li><a href="logout.php">Logout</a></li>
          </ul>
          <!--<form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>-->
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar" style="background-color:black;">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="index.php">Dashboard <span class="sr-only">(current)</span></a></li>
			<!-- find users' image if image not found then show dummy image -->
			
			
           <!-- <li><a href="#"><img src="../images/person.jpg" width="100" height="100" alt="not found"/></a></li>-->
			
			
           
			
			<li><a href="index.php?page=update_password"><span class="glyphicon glyphicon-user"></span> Update Password</a></li>
            <li><a href="index.php?page=manage_users"><span class="glyphicon glyphicon-user"></span> Manage Users</a></li>
			 <li><a href="index.php?page=add_notice"><span class="glyphicon glyphicon-envelope"></span> Add  Notification</a></li>
       <li><a href="index.php?page=notification"><span class="glyphicon glyphicon-envelope"></span> manage  Notification</a></li>
       <li><a href="index.php?page=public_not"><span class="glyphicon glyphicon-envelope"></span> Public Notification</a></li>
       <li><a href="index.php?page=public_post"><span class="glyphicon glyphicon-envelope"></span> manage Public Notification</a></li>
       <li><a href="index.php?page=cont_info"><span class="glyphicon glyphicon-envelope"></span> Add Contact-Info</a></li>
       <li><a href="index.php?page=cont-info-crud"><span class="glyphicon glyphicon-envelope"></span> manage Contact-Info</a></li>
       <li><a href="index.php?page=imp_message"><span class="glyphicon glyphicon-envelope"></span> Add Message</a></li>
       <li><a href="index.php?page=admin-crud-msg"><span class="glyphicon glyphicon-envelope"></span> manage Message</a></li>
          </ul>
         
         
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <!-- container-->
          
      <?php 
      
      
//total students
$r1 = "SELECT * FROM user";
$runq1 = mysqli_query($conn,$r1);

if($runq1){
 
}
$count1=0;
while($row=mysqli_fetch_assoc($runq1))
{
  $count1++;
}

//totla public notices
$rp = "SELECT * FROM public_notifications";
$runqp = mysqli_query($conn,$rp);
$pun = mysqli_num_rows($runqp);



     
//total notice
$r2 = "SELECT * FROM notice";
$runq2 = mysqli_query($conn,$r2);

if($runq2){
 
}
$count2=0;
while($row=mysqli_fetch_assoc($runq2))
{
  $count2++;
}
		@$page=  $_GET['page'];
		  if($page!="")
		  {
		  	if($page=="manage_users")
			{
				include('manage_users.php');
			
			}
			if($page=="admin-crud-msg")
			{
				include('admin-crud-msg.php');
			
      }
			if($page=="update_password")
			{
				include('update_password.php');
			
      }
      if($page=="update_cont_info")
			{
				include('update_cont_info.php');
			
      }
      if($page=="update_pub_not")
			{
				include('update_pub_not.php');
			
      }
      if($page=="cont-info-crud")
			{
				include('cont-info-crud.php');
			
      }
      if($page=="update_admin_msg")
			{
				include('update_admin_msg.php');
			
			}
      if($page=="imp_message")
			{
				include('msg.php');
			
			}
			
			if($page=="notification")
			{
				include('display_notification.php');
			
			}
			
			if($page=="update_notice")
			{
				include('update_notice.php');
			
      }
      if($page=="cont_info")
			{
				include('cont_info.php');
			
      }
     
			
			
			
			if($page=="add_notice")
			{
				include('add_notice.php');
			
      }
      if($page=="public_not")
			{
				include('public_not.php');
			
      }
      if($page=="public_post")
			{
				include('manage_not.php');
			
			}
		  }
		  
		  else
		  {
		  ?>
		  <!-- container end-->
		  
		  
		
		  
		  <h1 class="page-header">Dashboard</h1>
		  
		


      <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item primary">Dashboard</li>
      </ol>
      <div class="container">
    <div class="row">
		<div class="col-md-6">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">Students</h3>
				</div>
				<div  style="font-size: 30px;" class="panel-body ">Total number of students registered: <b style="font-size: 30px;"><?php echo "$count1"; ?></b></div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">Private Notice's</h3>
					
				</div>
				<div style="font-size: 30px;" class="panel-body">Total Number of notices Send:<b style="font-size: 30px;"><?php echo "$count2"; ?></b></div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">public Notice's</h3>
				
				</div>
				<div class="panel-body" style="font-size: 30px;">Total Number of notices Send:<b style="font-size: 30px;"><?php echo "$pun"; ?></b></div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">Message</h3>
				
				</div>
				<div class="panel-body" style="font-size: 30px;"><a href="index.php?page=imp_message"><button type= "button" class="btn btn-primary">Add Message</button></a></div>
			</div>
		</div>
	</div>
</div>

      

		  <?php } ?>
		  

         
        </div>
      </div>
    </div>

    

    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"
      integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"
      integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
      crossorigin="anonymous"
    ></script>
    <script
      type="text/javascript"
      charset="utf8"
      src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"
    ></script>
    <script>
      $(document).ready(function() {
        $("#example").DataTable();
      });
    </script>

    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
