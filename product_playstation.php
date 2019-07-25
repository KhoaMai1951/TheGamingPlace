<?php
$servername = "localhost";
$username = "root";
$password = null;
$dbname = "gamingplace";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM products";
$result = $conn->query($sql);
include 'process/product_process.php';
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


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="css/custom.css" rel="stylesheet" type="text/css">
  </head>
  <body>
 <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
  <a class="navbar-brand" href="index.php">The GamingPlace</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="register.html">Create Account</a>
      </li>
     
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" name="username" type="text" placeholder="Username" aria-label="Search">
      <input class="form-control mr-sm-2" name="password" type="password" placeholder="Password" aria-label="Search">
      <button class="btn btn-secondary my-2 my-sm-0" name="submit" type="submit">Login</button>
    </form>
  </div>
</nav>


<div class="container">

	<div class="row">
		<div class="col-md-4" style="padding-left: 20px;">
			<div class="cart-block" style="border-color: aqua;">
				<form action="cart/update" method="post">
					<table cellpadding="6" cellspacing="1" style="width:100%">
						<tr>
							<th>QTY</th>
							<th>Item Description</th>
							<th style="text-align-right">Item Price</th>
						</tr>
						<tr>
							<td></td>
							<th class="right">Total</th>
							<th class="right" style="text-align-right">$</th>
						</tr>
					</table>
					<button class="btn btn-dark" type="submit">Update Cart</button>
					<a class="btn btn-dark" href="cart">Go To Cart</a>
				</form>
			</div>
  			
  			<div class="list-group" style="padding-top: 30px;">
  				<b class="list-group-item" style="background-color: dimgray;">
  					Categories
  				</b>
  				<a href="product_xbox.php" class="list-group-item list-group-item-action ">Xbox</a>
  				<a href="product_playstation.php" class="list-group-item list-group-item-action active">Playstation</a>
  				<a href="product_nintendo.php" class="list-group-item list-group-item-action">Nintendo</a>
			</div>
			
		</div>
		<div class="col-md-8">
		<form method="post">
			<div class="card">
				<div class="card-header" style="background:#008C33;">
					<div class="card-title" style="color:white; font-size: 25px;"><strong>Playstation Games </strong></div>
				</div>
				<div class="card-body"  style="padding-top:0;">
					<div class="row">
						
						<!-- <div class='col-md-4 game' style='padding-top: 20px;'>
							<div class='game-price' style='background:green; position: absolute; bottom: 120px; right: 15px;'>50.00$</div>
							<a href='product.html'>
								<img src='images/game1.jpg' style='width:170px; height: 220px;'/>
							</a>
							<div class='game-title'>
								Watch Dogs
							</div>
							<div class='game-add'>
								<button class='btn btn-dark' type='submit'>Add To Cart</button>
							</div>
						</div> -->
		
						<?php
						if (mysqli_num_rows($result) >0)
						{
							// output data of each row 
							while($row = $result->fetch_assoc()) 
							{
								if($row["category_id"] == 2)
								{
									Product_list_by_category($result, $row);
								}
    						}
						}
						?>
					</div>		
				</div>
			</div>
		</form>
		</div>
	</div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script></body>
</html>
