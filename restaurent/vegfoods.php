<?php
require_once 'connection/conn.php';

include 'navigation.php';



$vegfood="SELECT * FROM vegfoods";
$result=$conn->query($vegfood);


?>
<br><br><br><br>



<table class="table table-inverse">
	<thead>
		<tr class="text-danger">
		<th>#</th>
		<th>Foods available</th>
		<th>Images</th>
		<th>Price</th>
		<th>Remarks</th>
	</tr>
	</thead>
	<tbody>
		<?php while($veg_food=mysqli_fetch_assoc($result)) : ?>
		<tr>
			<?php $image=$veg_food['images'];?>
			<td class="text-danger"><?=$veg_food['id'];?></td>
			<td class="text-dark"><?=$veg_food['foods'];?></td>
			<td><img class="img-circle" src="<?=$veg_food['images'];?>" alt="Image not available" height="200" width="200"></td>
			<td>Rs.<?=$veg_food['price'];?></td>
			<td class="btn btn-success btn-lg">Order now</td>
		</tr>
		<?php endwhile;?>
	</tbody>
</table>
<?php include 'footer.php';?>