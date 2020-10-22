<?php 
extract($_POST);
if(isset($update))
{
mysqli_query($conn,"update msg set hod_msg='$h_msg',prin_msg='$p_msg'where admin_id='".$_GET['admin_id']."'");
$err="<font color='blue'> Details updated</font>";

}

//select old data

$q=mysqli_query($conn,"select * from msg where admin_id='".$_GET['admin_id']."'");
$res=mysqli_fetch_array($q);

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
		<input type="text" name="h_msg" class="form-control" value="<?php echo $res['hod_msg']; ?>" required/></div>
	</div>
	
	<div class="row">
	<div class="" style="font-family:Times New Roman;font-size:1.5em">Principal message: </div>
		<div class="">
		<input type="text" name="p_msg" class="form-control" value="<?php echo $res['prin_msg']; ?>"  required/></div>
	</div>
   
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
		
		
		<input type="submit" value="Add" name="update" class="btn btn-primary"/>
		<input type="reset" class="btn btn-danger"/>
		</div>
	</div>
</form>	