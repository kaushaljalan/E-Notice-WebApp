<script>
	function DeleteNotice(id)
	{
		if(confirm("You want to delete this record ?"))
		{
		window.location.href="delete_cont_info.php?id="+id;
		}
	}
</script>
<?php 
$q=mysqli_query($conn,"select * from cont_info ");
$rr=mysqli_num_rows($q);
if(!$rr)
{
echo "<h2 style='color:red'>No data found !!!</h2>";
}
else
{
?>
<img id="head" style="width: " src = "../images/bmscelogonew.png">
<h2 style="color:">All Data</h2>

<table class="table table-bordered" id="example">
	<thead>
	<Tr class="">
		<th>Sr.No</th>
		<th>clg_name</th>
		<th>email</th>
		<th>phone</th>
		<th>delete</th>
		<th>edit</th>
	</Tr>
	</thead>
	<tbody>
		<?php 


$i=1;
while($row=mysqli_fetch_assoc($q))
{

echo "<Tr>";
echo "<td>".$i."</td>";
echo "<td>".$row['clg_name']."</td>";
echo "<td>".$row['clg_email']."</td>";
echo "<td>".$row['clg_phone']."</td>";

?>

<Td><a href="javascript:DeleteNotice('<?php echo $row['admin_id']; ?>')" style='color:Red'><span class='glyphicon glyphicon-trash'></span></a></td>


<?php 
echo "<Td><a href='index.php?page=update_cont_info&admin_id=".$row['admin_id']."' style='color:green'><span class='glyphicon glyphicon-edit'></span></a></td>";
echo "</Tr>";
$i++;
}
		?>
	</tbody>
	<tfoot>
    <Tr class="">
		<th>Sr.No</th>
		<th>clg_name</th>
		<th>email</th>
		<th>phone</th>
		<th>delete</th>
		<th>edit</th>
	</Tr>
	</tfoot>	
</table>
<?php }?>	