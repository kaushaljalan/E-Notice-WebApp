<?php 
include('../connection.php');
$nid=$_GET['id'];

$q=mysqli_query($conn,"delete from cont_info where admin_id='$nid'");

header('location:index.php?page=cont-info-crud');

?>
