<?php 
require_once('connection.php');
session_start();
extract($_POST);
if(isset($save))
{

	if($e=="" || $p=="")
	{
	$err="<font color='red'>fill all the fileds </font>";	
	}
	else
	{
$pass=md5($p);	

$sql=mysqli_query($conn,"select * from user where email='$e' and pass='$pass'");

$r=mysqli_num_rows($sql);

if($r==true)
{
$_SESSION['user']=$e;
header('location:user');
}

else
{

$err="<font color='red'>Invalid login details</font>";

}
}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<link rel="stylesheet" href="css/ll.css">
	<title>LoginPage</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">New-user</a>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a>
    </div>
  </div>
  <ul class="nav navbar-nav navbar-right">
      <li><a class="nav-item nav-link active" href="index.php">HOME</a></li>
    </ul>
</nav>
<div class="sidenav">
             <div class="login-main-text">
                <h2><br> Login Page</h2>
                <p>BMS-CSE DEPT</p>
                <img src="bmslogo2.png" alt="logo" class="img-thumbnail">
             </div>
</div>
          <div class="main">
             <div class="col-md-6 col-sm-12">
                <div class="login-form">
                   <form method="post">

				   <div class="row">
						<div class="col-sm-12"><?php echo @$err;?></div>
					</div>
               

                      <div class="form-group">
                         <label>User Name</label>
                         <input type="email" name="e" class="form-control" placeholder="User Name">
                      </div>
                      <div class="form-group">
                         <label>Password</label>
                         <input type="password" name="p" class="form-control" placeholder="Password">
                      </div>
                      <button type="submit"  name="save"  class="btn btn-black">Login</button>
                      <button type="reset" class="btn btn-secondary">Reset</button>
                   </form>
                </div>
             </div>
          </div>



</body>
</html>	