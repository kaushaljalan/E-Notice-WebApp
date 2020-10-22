<script>
	function DeleteNotice(id)
	{
		if(confirm("You want to delete this record ?"))
		{
		window.location.href="delete_pub_not.php?id="+id;
		}
	}
</script>
<?php 
$q=mysqli_query($conn,"select * from public_notifications ");
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
		<th>title</th>
		<th>link</th>
		<th>date</th>
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
echo "<td>".$row['title']."</td>";
echo "<td>".$row['link']."</td>";
echo "<td>".$row['date']."</td>";

?>

<Td><a href="javascript:DeleteNotice('<?php echo $row['admin_id']; ?>')" style='color:Red'><span class='glyphicon glyphicon-trash'></span></a></td>


<?php 
echo "<Td><a href='index.php?page=update_pub_not&admin_id=".$row['admin_id']."' style='color:green'><span class='glyphicon glyphicon-edit'></span></a></td>";
echo "</Tr>";
$i++;
}
		?>
	</tbody>
	<tfoot>
	<Tr class="">
	<th>Sr.No</th>
		<th>title</th>
		<th>link</th>
		<th>date</th>
		<th>delete</th>
		<th>edit</th>
	</Tr>
	</tfoot>	
</table>
<?php }?>	