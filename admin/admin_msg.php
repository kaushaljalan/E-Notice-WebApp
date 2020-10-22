<?php 
require('../connection.php');
extract($_POST);
if(isset($save))
{

$query="insert into cont_info values('1','$clg_name', '$clg_email','$clg_phone')";
if(mysqli_query($conn,$query))
$err="<font color='blue'>Added successfull</font>";
else
$err="<font color='blue'>Data Already added (delete old data to insert new/update)</font>";

}
?>

<ol class="breadcrumb mb-4">
        <li class="breadcrumb-item primary" style="font-size: 25px">Add Contact-info</li>
      </ol>
<form method="post" >
	
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"><?php echo @$err;?></div>
	</div>
	
	
	
	<div class="row">
	<div class="" style = "font-family:Times New Roman;font-size:1.5em">College Name: </div>
		<div class="">
		<input type="text" name="clg_name" class="form-control" required/></div>
	</div>
	
	<div class="row">
	<div class="" style="font-family:Times New Roman;font-size:1.5em">Email: </div>
		<div class="">
		<input type="text" name="clg_email" class="form-control" required/></div>
	</div>
    <div class="row">
	<div class="" style="font-family:Times New Roman;font-size:1.5em">Phone: </div>
		<div class="">
		<input type="text" name="clg_phone" class="form-control" required/></div>
	</div>
	
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
		
		
		<input type="submit" value="Add" name="save" class="btn btn-primary"/>
		<input type="reset" class="btn btn-danger"/>
		</div>
	</div>
</form>	