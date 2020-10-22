<?php 
require('connection.php');
extract($_POST);
if(isset($save))
{
//check user alereay exists or not
$sql=mysqli_query($conn,"select * from user where email='$e'");

$r=mysqli_num_rows($sql);

if($r==true)
{
$err= "<font color='red'>This user already exists</font>";
}
else
{
	
//dob
$dob=$yy."-".$mm."-".$dd;

//hobbies
//$hob=implode(",",$hob);

//image
$imageName=$_FILES['img']['name'];


//encrypt your password
$pass=md5($p);


$query="insert into user values('','$n','$e','$pass','$usn','$sem','$mob','$gen','$imageName','$dob')";
mysqli_query($conn,$query);

//upload image

mkdir("images/$e");
move_uploaded_file($_FILES['img']['tmp_name'],"images/$e/".$_FILES['img']['name']);


$err="<font color='blue'>Registration successfull</font>";



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
input{
    font-size: 25px;
    
}
</style>


<script type="text/javascript">
		
		window.onload = function () {
			document.getElementById("phone").onchange = passwdlen;
			document.getElementById("p").onchange = passwdlen2;
		}

		function passwdlen() {
			//var pass2 = document.getElementById("password2").value;
			var num = document.getElementById("phone").value;
			if (num.length < 10 )
				document.getElementById("phone").setCustomValidity("phone length shuld be = 10");
			else
				document.getElementById("phone").setCustomValidity('');
			//empty string means no validation error
		}

		function passwdlen2() {
			//var pass2 = document.getElementById("password2").value;
			var pass = document.getElementById("p").value;
			if (pass.length < 8 )
				document.getElementById("p").setCustomValidity("passwd length shuld be > 8");
			else
				document.getElementById("p").setCustomValidity('');
			//empty string means no validation error
		}
		
</script>
</head>

<center><body style="background-color:#fff;"></center>



<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="../index.php">HOME</a>
  
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="../index.php"> <span class="sr-only">(current)</span></a>
    </div>
  </div>
</nav>


<img id="head" style="" class="center" src = "images/bmscelogonew.png">


    <div class="container" style="margin-top:30px;">
        <div class="">
            <div class="">
                <div class="login-panel panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Student Registration</h3>
                    </div>
                    <div class="panel-body">
                        <form method="post"  enctype="multipart/form-data">
                        <div class="form-group">
                                    <label>
                                        <?php echo @$err;?>
                                    </label>
                                </div>
                            <fieldset>
                            
            <div class="form-group">
				<tr>
					<td>Enter Your name</td>
					<Td><input  type="text"  class="form-control lg" name="n" required/></td>
				</tr>
            </div?
				<tr>
					<td>Enter Your email </td>
					<Td><input type="email"  class="form-control" name="e" required/></td>
				</tr>
				
				<tr>
					<td>Enter Your Password </td>
					<Td><input type="password"  class="form-control" name="p" id="p" required/></td>
				</tr>
				<tr>
					<td>Enter Your USN</td>
					<Td><input  type="text"  class="form-control" name="usn" required/></td>
				</tr>
                <tr>
					<td>Enter Your Sem</td>
					<Td><select name="sem" required>
                        <option value ="">sem</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                    </td>
				</tr>
				<tr>
					<td>Enter Your Mobile</td>
					<Td><input  class="form-control" type="number" name="mob" id="phone" required/></td>
				</tr>
				
				<tr>
					<td>Select Your Gender</td>
					<Td>
				Male<input type="radio" name="gen" value="m" required/>
				Female<input type="radio" name="gen" value="f"/>	
					</td>
				</tr><br><br>
	
				
				<tr>
					<td>Upload  Your Image </td>
					<Td><input class="form-control" type="file" name="img"/></td>
				</tr>
				
				<tr>
					<td>Enter Your DOB</td>
					<Td>
					<select name="yy" required>
					<option value="">Year</option>
					<?php 
					for($i=1950;$i<=2020;$i++)
					{
					echo "<option>".$i."</option>";
					}					
					?>
					
					</select>
					
					<select name="mm" required>
					<option value="">Month</option>
					<?php 
					for($i=1;$i<=12;$i++)
					{
					echo "<option>".$i."</option>";
					}					
					?>
					
					</select>
					
 					
					<select name="dd" required>
					<option value="">Date</option>
					<?php 
					for($i=1;$i<=31;$i++)
					{
					echo "<option>".$i."</option>";
					}					
					?>
					
					</select>
					
					</td>
				</tr>
				
				<tr><br><br>
					
					
<Td colspan="2" align="center">
<input type="submit" class="btn btn-success" value="Save" name="save"/>
<input type="reset" class="btn btn-success" value="Reset"/>
				
					</td>
				</tr>
                                <h5><center><a href="admin_signup.php">Create Admin Account</a></center></h5>
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
