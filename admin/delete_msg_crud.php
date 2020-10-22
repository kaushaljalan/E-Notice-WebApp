<?php 
include('../connection.php');
$nid=$_GET['id'];

$q=mysqli_query($conn,"delete from msg where admin_id='$nid'");

header('location:index.php?page=admin-crud-msg');

?>
