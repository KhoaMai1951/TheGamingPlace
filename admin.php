<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

<link href="css/bootstrap.css" rel="stylesheet">

</head>
<body>
<div class="flex-wrap" style="display: flex; margin-top: 0;">
		<!-- Nav pills -->
   		<ul class="nav nav-pills flex-column" role="tablist" style="background-color: #151515; min-width: 250px;  min-height: 100vh;">
    		<li class="nav-item ">
     		 	<a class="nav-link active" data-toggle="pill" href="#menu1" style="color:white;">Add Product</a>
    		</li>
    		<li class="nav-item">
      			<a class="nav-link" data-toggle="pill" href="#menu2" style="color:white;">Menu 1</a>
    		</li>
   		 	<li class="nav-item">
   		   		<a class="nav-link" data-toggle="pill" href="#menu3" style="color:white;">Menu 3</a>
  		  	</li>
 		 </ul>


  	<!-- Tab panes -->
  <div class="tab-content">
    <!-- THÊM SẢN PHẨM -->
    <div id="menu1" class="container tab-pane active"><br>
    	<form action="upload.php" method="post" enctype="multipart/form-data">
   		 	Select image to upload:
   			<input type="file" name="fileToUpload" id="fileToUpload"><br><br>
   			Title: <input type="text" name="title"><br><br>
   			Description: <input type="text" name="description"><br><br>
   			Price: <input type="number" min="0" step="0.01" name="price"><br><br>
   			Category: <select name="category">
    			<option value="1">XBox</option>
    			<option value="2">Playstation</option>
    			<option value="3">Nintendo</option>
  			</select><br><br>
    		<input type="submit" value="Upload Product" name="submit">
		</form>
    </div>
    <div id="menu2" class="container tab-pane fade"><br>
      <h3>Menu 1</h3>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
    <div id="menu3" class="container tab-pane fade"><br>
      <h3>Menu 2</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>
  </div>
  
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</script>
</body>

</html>
