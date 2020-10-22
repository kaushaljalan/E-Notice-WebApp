<?php 
extract($_POST);
if(isset($add))
{

	if($details=="" || $sub=="" || $user=="")
	{
	$err="<font color='red'>Empty Feilds (Fill Up to Continue)</font>";	
	}
	else
	{
		foreach($user as $v)
		{
mysqli_query($conn,"insert into notice values('','$v','$sub','$details',now())");
		}
		
		$err="<font color='gree	n'>Notice added Successfully</font>";	
	}
}

?>
<img id="head" style="width: " src = "../images/bmscelogonew.png">
<h2>Add New Notice</h2>
<form method="post">
	
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"><?php echo @$err;?></div>
	</div>	
	
	
	
	<div class="row">
	<div class="" style = "font-family:Times New Roman;font-size:1.5em">Enter Subject</div>
		<div class="">
		<input type="text" name="sub" class="form-control" required></div>
	</div>
	
	
	
	<div class="row">
	<div class="" style = "font-family:Times New Roman;font-size:1.5em">Enter details</div>
		<div class="">
		<textarea name="details" class="form-control" required></textarea></div>
	</div>
	
	
		
	
	<div class="row">
	<div class="" style = "font-family:Times New Roman;font-size:1.5em">Select Student</div>
		<div class="">
		<select name="user[]" multiple="multiple" class="form-control" required>
			<?php 
	$sql=mysqli_query($conn,"select name,email from user");
	while($r=mysqli_fetch_array($sql))
	{
		echo "<option value='".$r['email']."'>".$r['name']."</option>";
	}
			?>
		</select>
		</div>
	</div>
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
	</div>	
		
		<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-4">
		<center><input type="submit" value="Add New Notice" name="add" class="btn btn-primary"/>
		<input type="reset" class="btn btn-danger"/></center>
		</div>
	</div>
</form>	