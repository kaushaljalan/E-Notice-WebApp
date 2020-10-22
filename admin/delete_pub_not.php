<?php 
include('../connection.php');
$nid=$_GET['id'];

$q=mysqli_query($conn,"delete from public_notifications where admin_id='$nid'");

header('location:index.php?page=public_post');

?>
