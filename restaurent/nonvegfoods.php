<?php
require_once 'connection/conn.php';
include 'navigation.php';

$nonvegfood="SELECT * FROM nonvegfoods";
$nonvegfoods=$conn->query($nonvegfood);
?>
<br><br><br>

	<table class="table table-inverse">
		<thead>
		<tr>
			<th>#</th>
			<th>Foods available</th>
			<th>Images</th>
			<th>Price</th>
			<th>Remarks</th>
		</tr>
	</thead>
	<tbody>
		<?php while($result=mysqli_fetch_assoc($nonvegfoods)):?>
		<tr>
			<td class="text-danger"><?=$result['id'];?></td>
			<td><?=$result['foods'];?></td>
			<td><img class="img-circle" src="<?=$result['images'];?>" alt="Image not available" height="200" width="200"</td>
			<td>Rs.<?=$result['price'];?></td>
			<td class="btn btn-success">Order Now</td>
		</tr>
	<?php endwhile;?>
	</tbody>
	</tr>
	</table>
	<?php include 'footer.php';?>
