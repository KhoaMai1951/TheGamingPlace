<?php
session_start();
include("database.php");
$sql = "SELECT * FROM products ORDER BY id DESC";
$result = $conn->query($sql);
?>

<?php


?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <title>The GamingPlace</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/starter-template/">

    <!-- Bootstrap core CSS -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/custom.css" rel="stylesheet" type="text/css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


    <style>
	table, th, td {
  
}
		tr{
			border-bottom: 1px solid black;
  			border-collapse: collapse;
		}
		
		th{
			color:white;
		}
		
	
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }
		
		body{
			padding-top: 80px;
		}

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
<script>
	
$(document).ready(function(){
	$(".category_id").change(function(){
		var category_id = $(".category_id").val();
		$(".classdiv").html(category_id);   
		$.post(
			"lietke_ajax.php", 
			{category_id : category_id}, 
			function(data, status){
				if(status=="success")
            	{
					$(".classdiv1").html(data);   
            	}
			});
	});
});
</script>
  </head>
<body>

<?php
		include "database.php";
		$str="select * from categories";
		$rs=$conn->query($str);
		echo "<select name='category_id' class='category_id'>";
		while($row = $rs->fetch_assoc())
		{
			echo "<option value=".$row['id'].">".$row['name']."</option>";
		} 
		echo "</select>";
		echo "<br>";
		echo "<br>";
	?>
	<div class="classdiv"></div>
    <div class="classdiv1"></div>
    


</body>
</html>
