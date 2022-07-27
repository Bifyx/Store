<?php
session_start();
include_once('connect.php');

$query = mysqli_query($con, "SELECT * FROM products");

?>
<!DOCTYPE html>

<html lang="en">
<head>
<title>Store</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- bootstrap 5 CDN -->

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<link rel = "stylesheet" href="css/style.css">

	<!-- bootstrap 5 CDN-->

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>
<body>
	<form action="massdelete.php" method="post" onsubmit="return deleteConfirm();">
		<nav class="navbar"> 
		  <a class="navbar-brand" href="index.php">Product List</a>
		  	<div id="topbtn">
		      <a href="addproduct.php"><button class="navbtn" type="button">ADD</button></a>		  
		      <button id="delete-product-btn" type="submit" name="massdelete" value="massdelete">MASS DELETE</button>
		  	</div>
		</nav>
		<div class="not"></div>
			<div class="cover">
				<?php
            		if(mysqli_num_rows($query) > 0){
               			while($product = mysqli_fetch_assoc($query)){
                    		extract($product);
        		?>				
				<div class="product-image">
					<input type="checkbox" name="selected_id[]" class="delete-checkbox" value="<?php echo $product['SKU']; ?>">
					<img src="<?= $product['image']; ?>" alt="<?= $product['Name']; ?>" width="200" height= "200" />		
					<b><p class="id"> <?= $product['SKU'];?></p></b>
					<b><p class="name"> <?= $product['Name']?></p></b>
					<b><p class="price"><?= $product['Price'];?>$</p></b>
					<b><p class="Attribute"><?= $product['Attribute'];?></p></b>
				 
				</div>
				<?php } }else{ ?>
            		<h4>No records found.</h4>
        		<?php } ?>

        		<script type="text/javascript">
				function deleteConfirm(){
				    var result = confirm("Do you really want to delete records?");
				    if(result){
				        return true;
				    }else{
				        return false;
				    }
				}
				$(document).ready(function(){
				    $('#delete-product-btn').on('click',function(){
				        if(this.checked){
				            $('.delete-checkbox').each(function(){
				                this.checked = true;
				            });
				        }else{
				             $('.delete-checkbox').each(function(){
				                this.checked = false;
				            });
				        }
				    });
				    
				    $('.delete-checkbox').on('click',function(){
				        if($('.delete-checkbox:checked').length == $('.delete-checkbox').length){
				            $('#delete-product-btn').prop('checked',true);
				        }else{
				            $('#delete-product-btn').prop('checked',false);
				        }
				    });
				});
				</script>

				
				
			</div>
	</form>

				
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

