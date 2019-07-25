<?php
include ('database.php');

$product_category = $_POST['category_id'];
$sql = "SELECT * FROM products WHERE category_id = '$product_category'";
$result = $conn->query($sql);


echo "
<table>
	<tr>
		<th>ID</th>
		<th>Title</th>
	</tr>";

if(mysqli_num_rows($result) > 0) :
	while ($row = mysqli_fetch_array($result)) :
		echo "<tr>";
		echo "<th>".$row['id']."</th>";
		echo "<th>".$row['title']."</th>";
		echo "</tr>";
	endwhile;
endif;	
	
echo "</table>";


?>


