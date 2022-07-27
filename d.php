<?php
include_once('connect.php');

if ($product["productType"] == "DVD") {
  $product["Size"] ?> MB</p></b>

}elseif ($product["productType"] == "Book") {
  
}
                  <b><p class="weight">Weight: <?= $product["Weight"] ?> KG</p></b>
}else{Dimension: $product["Attribute"] 

}
?>  



$fn = $_POST['ln'].'x'.$_POST['ln'].'x'.$_POST['ln'];


$sku = $_POST['sku'];
$name= $_POST['name'];
$price = $_POST['price'];
$type = $_POST['productType'];
//$fn = $_POST['mb'];
//$fn = $_POST['bk'];

    
    $find= "insert into products(SKU, Name, Price, Type, Attribute) values (?, ?, ?, ?, ?)";
    $stmt = mysqli_stmt_init($con);

    if (! mysqli_stmt_prepare($stmt, $find)){
      die(mysqli_error($con));
    }
    
   mysqli_stmt_bind_param($stmt, "isdss", $sku, $name, $price, $type, $fn );
   mysqli_stmt_execute($stmt);
   echo "New data inserted sucessfully";

?>
