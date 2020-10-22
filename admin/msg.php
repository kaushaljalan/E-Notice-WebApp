<?php 
require('../connection.php');
extract($_POST);
if(isset($save))
{
// select current admin_id
$sql3=mysqli_query($conn,"select * from admin where user='".$_SESSION['admin']."'");
$res3=mysqli_fetch_assoc($sql3);
$aid = $res3['admin_id'];

$query="insert into msg values('$aid','$h_msg', '$p_msg',now())";
if(mysqli_query($conn,$query))
$err="<font color='blue'>Added successfull</font>";
else
$err="<font color='blue'>Could not be added</font>";

}
?>

<ol class="breadcrumb mb-4">
        <li class="breadcrumb-item primary" style="font-size: 25px">Add Message</li>
      </ol>
<form method="post" >
	
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"><?php echo @$err;?></div>
	</div>
	
	
	
	<div class="row">
	<div class="" style = "font-family:Times New Roman;font-size:1.5em">HOD Message: </div>
		<div class="">
		<input type="text" name="h_msg" class="form-control" required/></div>
	</div>
	
	<div class="row">
	<div class="" style="font-family:Times New Roman;font-size:1.5em">Principal message: </div>
		<div class="">
		<input type="text" name="p_msg" class="form-control" required/></div>
	</div>
   
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
		
		
		<input type="submit" value="Add" name="save" class="btn btn-primary"/>
		<input type="reset" class="btn btn-danger"/>
		</div>
	</div>
</form>	