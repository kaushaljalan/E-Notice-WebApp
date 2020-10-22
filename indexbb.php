<?php 
include('connection.php');
session_start();
 ?>
<html>
	<head>
		<title>Online Notice Board</title>
		<link rel="stylesheet" href="css/bootstrap.css"/>
		<script src="js/jquery_library.js"></script>
<script src="js/bootstrap.min.js"></script>

<style>
.item active {
    width: 200px;
    height: 120px;
}

/* resize images */
.item active img {
    width: 100%;
    height: auto;
}

#lo{
	height:500px;
}

</style>
	</head>
	<body  bgcolor="red">
			<nav class="navbar navbar-default navbar-fixed-top" style="background:#000">
  <div class="container">
  
  <ul class="nav navbar-nav navbar-left">
    <li><a href="index.php"><strong>Online Notice Board</strong></a></li>
      
	  
	  <li><a href="index.php?option=about"></a></li>
   
   
	
	<!--<li><a href="index.php?option=contact"><span class="glyphicon glyphicon-phone"></span>Contact</a></li>-->
	
	</ul>


<ul class="nav navbar-nav navbar-right">
      <li><a href="registration.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>



</div>
</nav>	

<div class="container-fluid">
	<!-- slider -->
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img id = "lo" src="images/newheader.jpeg" alt="...">
      <div class="carousel-caption">
        ...
      </div>
    </div>
   <!-- <div class="item">
      <img id = "lo" src="images/grass.jpg" alt="...">
      <div class="carousel-caption">
        ...
      </div>
    </div>
	
	 <div class="item">
      <img  id = "lo" src="images/tb.jpg" alt="...">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    ...
  </div>
  -->

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- slider end-->
</div>


<div class="container">
	<div class="row">
	<!-- container -->
		<div class="col-sm-8">
		<?php 
		@$opt=$_GET['option'];
		
		if($opt!="")
		{
			if($opt=="about")
			{
			include('about.php');
			}
			else if($opt=="contact")
			{
			include('contact.php');
			}
			
			// else if($opt=="New_user")
			// {
			// include('registration.php');
			// }
			// else if($opt=="login")
			// {
			// include('login.php');
			// }
			

		}
		else
		{
		echo "<h2></h2>
		 Welcome  user";
		}
		?>
		
		
		
		
		</div>
	<!-- container -->
		
		<div class="col-sm-12">
			<div class="panel panel-primary">
  <div class="panel-heading">LATEST NEWS</div>
  <div class="panel-body">
  <marquee width="60%" direction="right" height="100px">
    this is notification from ADMIN HOD1 <br>
    this is notification from ADMIN HOD2 <br>
    this is notification from ADMIN HOD3 <br>
    this is notification from ADMIN HOD4 <br>
    this is notification from ADMIN HOD5 <br>
</marquee>
  </div>
  <div class="panel-body">
    BMSCE CSE DEPT
  </div>
</div>
		
		</div>
	</div>

</div>



<br/>
<br/>
<br/>
<br/>

<marquee width="60%" direction="down" height="100px">
    this is notification from ADMIN HOD1 <br>
    this is notification from ADMIN HOD2 <br>
    this is notification from ADMIN HOD3 <br>
    this is notification from ADMIN HOD4 <br>
    this is notification from ADMIN HOD5 <br>
</marquee>

<!-- footer-->

			<nav class="navbar navbar-default navbar-bottom" style="background:black">
  <div class="container">
  
  <ul class="nav navbar-nav navbar-left">
    <li><a href="http://www.BMSCE.AC.IN/"> Developed by  bmsce</a></li>
      
	</ul>




</div>
</nav>
<!-- footer-->

	</body>
</html>