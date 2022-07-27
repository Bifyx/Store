<?php

include_once('connect.php');


//fn = $_POST['ln'].'x'.$_POST['ln'].'x'.$_POST['ln'];


$sku = $_POST['sku'];
$name= $_POST['name'];
$price = $_POST['price'];
$type = $_POST['productType'];
//$fn = $_POST['mb'];
$fn= $_POST['bk'];

    
    $find= "INSERT INTO products(SKU, Name, Price, Type, Attribute) values (?, ?, ?, ?, ?)";
    $stmt = mysqli_stmt_init($con);

    if (! mysqli_stmt_prepare($stmt, $find)){
      die(mysqli_error($con));
    }else{
        mysqli_stmt_bind_param($stmt, "isdsi", $sku, $name, $price, $type, $fn );
        mysqli_stmt_execute($stmt);
        echo "New data inserted sucessfully";
    }
    
   

?>
