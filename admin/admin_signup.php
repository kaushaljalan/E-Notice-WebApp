<?php 
require('../connection.php');
extract($_POST);
if(isset($save))
{
//check user alereay exists or not
$sql=mysqli_query($conn,"select * from admin where a_id='$aid'");

$r=mysqli_num_rows($sql);
if($r==true)
{
    $sql1 = "insert into admin values('','$email','$pass','$name','$aid','$an')";
    $rq = mysqli_query($conn,$sql1);
    if($rq){
       $err= "<font color='green'>Account Registered you can Login</font>";
    }
    else{
        $err= "<font color='red'>having some problem contact ADMIN</font>";
    }

}else{
    $err= "<font color='red'>You are not authorized/make sure id is correct ?</font>";
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

    <title>Admin !</title>
    <link rel="icon" href="../bmslogo.png">
    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../css/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">

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
</style>
</head>

<body style="background-color:#ffebd9;">



<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="../index.php">HOME</a>
  
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="../index.php"> <span class="sr-only">(current)</span></a>
    </div>
  </div>
</nav>








    <div class="container" style="margin-top:150px;">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">SIGN-UP (ADMIN-ONLY!)</h3>
                    </div>
                    <div class="panel-body">
                        <form method="post">
                            <fieldset>
                            <div class="form-group">
                                    <input class="form-control" name="name" type="text" autofocus required placeholder="name">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" name="aid" type="text" autofocus required placeholder="Admin_id(Secret code)">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="pass" type="password" required>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" name="an" type="number" autofocus required placeholder="phone Number">
                                </div>
                            
								
                                <div class="form-group">
                                    <input class="form-control" name="email" type="email" autofocus required placeholder="E-mail">
                                </div>
								
                                <div class="form-group">
                                    <input name="save" type="submit" value="register" class="btn btn-lg btn-success btn-block">
                                </div>

								<div class="form-group">
                                    <label>
                                        <?php echo @$err;?>
                                    </label>
                                </div>
								<div class="form-group">
                                    <label>
                                       have account ?<a href ="login.php">login</a>
                                    </label>
                                </div>
                                
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="../css/css/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../css/css/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../css/css/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../css/css/sb-admin-2.js"></script>

</body>

</html>
