<?php 
extract($_POST);
if(isset($update))
{
mysqli_query($conn,"update public_notifications set title='$title',link='$link' where admin_id='".$_GET['admin_id']."'");
$err="<font color='blue'>Notice updated </font>";

}

//select old notice 

$q=mysqli_query($conn,"select * from public_notifications where admin_id='".$_GET['admin_id']."'");
$res=mysqli_fetch_array($q);

?>
<img id="head" style="width: " src = "../images/bmscelogonew.png">
<h2>Update public_Notification</h2>
<ol class="breadcrumb mb-4">
        <li class="breadcrumb-item primary" style="font-size: 25px">Add Public Notification</li>
      </ol>
<form method="post" >
	
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"><?php echo @$err;?></div>
	</div>
	
	
	
	<div class="row">
	<div class="" style = "font-family:Times New Roman;font-size:1.5em">update title: </div>
		<div class="">
		<input type="text" name="title" class="form-control" value="<?php echo $res['title']; ?>" required/></div>
	</div>
	
	<div class="row">
	<div class="" style="font-family:Times New Roman;font-size:1.5em">update Link: </div>
		<div class="">
		<input type="text" name="link" class="form-control" value="<?php echo $res['link']; ?>" required/></div>
	</div>
	
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
		
		
		<input type="submit" value="Add" name="update" class="btn btn-primary"/>
		<input type="reset" class="btn btn-danger"/>
		</div>
	</div>
</form>	