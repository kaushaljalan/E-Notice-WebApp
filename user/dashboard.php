<?php
	$q=mysqli_query($conn,"select * from notice where user='".$_SESSION['user']."'ORDER BY notice_id DESC");
	$rr=mysqli_num_rows($q);
?>

      <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item primary">Dashboard</li>
      </ol>
      <div class="container">
    <div class="row">
		<div class="col-md-6">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">Notification</h3>
				</div>
				<div class="panel-body ">Total number of Notification: <b style="font-size: 30px;"><?php echo "$rr"; ?></b></div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">Profile</h3>
					
				</div>
				 <div class="panel-body"><a href="index.php?page=update_profile"><button type="button" class="btn btn-primary">My Profile </button></a></div>
		</div>
	</div>
	</div>
	
</div>
