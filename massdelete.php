<?php
    session_start();
    include_once('connect.php');
    if (count($_POST["selected_id"]) > 0 ) {
      $all = implode(",", $_POST["selected_id"]);
      $sql="DELETE FROM products WHERE SKU IN ($all)";
      if(mysqli_query($con,$sql)){
          $_SESSION['success'] = 'Products have been deleted successfully.';
      }
    }else{
        $_SESSION['error'] = 'Select checkbox to delete product.';
    }
    header("Location:index.php");
?>