<?php 
$q=mysqli_query($conn,"select * from notice where user='".$_SESSION['user']."'ORDER BY notice_id DESC");
$rr=mysqli_num_rows($q);
if(!$rr)
{
echo "<h2 style='color:red'>No any notice for You !!!</h2>";
}
else
{
?>

<img id="head" style="width: " src = "../images/bmscelogonew.png">
<h2>All Notification</h2>

<table class="table table-striped" id="example">
<thead>
	<Tr class="">
		<th>Sr.No</th>
		<th>Subject</th>
		<th>Details</th>
		<th>Date</th>
		</Tr>
</thead>
<tbody>
		<?php 


$i=1;
while($row=mysqli_fetch_assoc($q))
{

echo "<Tr>";
echo "<td>".$i."</td>";
echo "<td>".$row['subject']."</td>";
echo "<td>".$row['Description']."</td>";
echo "<td>".$row['Date']."</td>";

echo "</Tr>";
$i++;
}
		?>
</tbody>
<tfoot>
<Tr class="">
		<th>Sr.No</th>
		<th>Subject</th>
		<th>Details</th>
		<th>Date</th>
		</Tr>
</tfoot>
</table>
<?php }?>