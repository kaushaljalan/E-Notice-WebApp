<?php 
extract($_POST);
if(isset($update))
{
mysqli_query($conn,"update cont_info set clg_name='$clg_name',clg_email='$clg_email', clg_phone='$clg_phone' where admin_id='".$_GET['admin_id']."'");
$err="<font color='blue'>College Details updated</font>";

}

//select old data

$q=mysqli_query($conn,"select * from cont_info where admin_id='".$_GET['admin_id']."'");
$res=mysqli_fetch_array($q);

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
		<input type="text" name="clg_name" class="form-control"  value="<?php echo $res['clg_name']; ?>" required/></div>
	</div>
	
	<div class="row">
	<div class="" style="font-family:Times New Roman;font-size:1.5em">Email: </div>
		<div class="">
		<input type="text" name="clg_email" class="form-control" value="<?php echo $res['clg_email']; ?>" required/></div>
	</div>
    <div class="row">
	<div class="" style="font-family:Times New Roman;font-size:1.5em">Phone: </div>
		<div class="">
		<input type="text" name="clg_phone" class="form-control" value="<?php echo $res['clg_phone']; ?>" required/></div>
	</div>
	
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
		
		
		<input type="submit" value="Add" name="update" class="btn btn-primary"/>
		<input type="reset" class="btn btn-danger"/>
		</div>
	</div>
</form>	