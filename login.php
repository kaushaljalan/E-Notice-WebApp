

<?php 
require_once('connection.php');
include('config.php');

//session_start();
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

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Student Login</title>
    <link rel="icon" href="bmslogo.png">
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="css/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<style>
    .d{
        backgroud-color:red ;
    }
    .center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 25%;
}
</style>
</head>

<center><body style="background-color:#fff;"></center>



<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php">HOME</a>
  
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="index.php"> <span class="sr-only">(current)</span></a>
    </div>
  </div>
</nav>


<img id="head" style="" class="center" src = "images/bmscelogonew.png">


    <div class="container" style="margin-top:30px;">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In (Student)</h3>
                    </div>
                    <div class="panel-body">
                        <form method="post" >
                        <div class="row">
						<div class="col-sm-12"><?php echo @$err;?></div>
					</div>
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" name="e" type="email" autofocus required placeholder="E-mail">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="p" type="password" required>
                                </div>
                                
                                
								<div class="form-group">
                                <button type="submit"  name="save"  class="btn btn-success">Login</button>
                                <button type="reset" class="btn btn-primary">Reset</button>
                                </div>

                                <h5><center><a href="registration.php">Create Account</a></center></h5>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="css/css/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="css/css/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="css/css/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="css/css/sb-admin-2.js"></script>

</body>

</html>
