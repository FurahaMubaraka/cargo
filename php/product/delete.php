<?php
include '../include/connection.php';

$sql=mysqli_query($conn,"DELETE FROM products WHERE p_id='$_GET[dlt]'");
if($sql){
    header('location: product.php');
}else{
    header('location: product.php');
}

?>