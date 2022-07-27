<?php

include_once('connect.php');

?>
<!DOCTYPE html>
<html>
<head>
<title>Add Product</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- bootstrap 5 CDN-->

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<link rel = "stylesheet" href="css/style.css">

	<!-- bootstrap 5 CDN-->

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

	<script>
		function yesnoCheck(that) 
		{
	    if (that.value == "DVD") 
	    {
	        document.getElementById("DVD").style.display = "block";
	    }
	    else
	    {
	        document.getElementById("DVD").style.display = "none";
	    }
	    if (that.value == "Furniture")
	    {
	        document.getElementById("Furniture").style.display = "block";
	    }
	    else
	    {
	        document.getElementById("Furniture").style.display = "none";
	    }
	    if (that.value == "Book")
	    {
	        document.getElementById("Book").style.display = "block";
	    }
	    else
	    {
	        document.getElementById("Book").style.display = "none";
	    }
		}
</script>

</head>
<body>
	
<nav class="navbar">
  <a class="navbar-brand" href="addproduct.php">Product Add</a>
  
    <dic class="form-inline">
		  <a href="addproduct.php"><button class="navbttn" type="button">Cancel</button></a>
		  <a href="index.php"><button class="navbttn" type="button">Back</button></a>
    </div>
</nav>
<div id="form_body">
	<form id='product_form' action="save.php" method="post">

			<p>
			<label>SKU</label>
			<input type="text" name="sku" placeholder="#sku" id="sku"required>
			 
			</p>

			<p>
			<label>Name</label>
			<input type="text" name="name" placeholder="#name" id="name" required>
			
			</p>

			<p>
			<label>Price </label>
			<input type="text" name="price" placeholder="#price" id="price" required>
		
			</p>
				
			<p>
			<label>Type Switcher </label>
			<select id="productType" name="productType"  onchange="yesnoCheck(this);">
			<option value="typeswitch" disabled selected="selected">Type Switcher</option>
			<option value="Book" >Book</option>
			<option value="DVD" >DVD</option>
			<option value="Furniture" >Furniture</option>
			</select>
			</p>


			<p id= "DVD" style="display: none;">
			<label>Size (MB)</label>
			<input type="text" name="mb" placeholder="#size" id="size" >
			
			</p>

			<p id= "Furniture" style="display: none;">
			<label>Height (CM)</label>
			<input type="text" name="ln" placeholder="#height" id="height">

			<label>Width (CM)</label>
			<input type="text" name="ln" placeholder="#width" id="width">
		
			<label>Length (CM)</label>
			<input type="text" name="ln" placeholder="#length" id="length" >
			
			</p>

			<p id= "Book" style="display: none;">
			<label>Weight (KG) </label>
			<input type="text" name="bk" placeholder="#weight" id="weight">
		
			</p>

			<p>
			
			<button id="savebttn">Save</button>
			</p>

	</form>
</div>
<footer>
	<div class="footer">
		Scandiweb Test Assignment
	</div>
</footer>
	    	

	<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src = "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src = "https://maxcdn.bootstrapcdn.com/4.5.2/css.bootstrap.min.css"></script>
</body>
</html>

