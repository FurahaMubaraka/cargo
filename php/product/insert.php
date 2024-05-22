<?php
include '../include/connection.php';

if(isset($_POST['submit'])){
    $pname=$_POST['pname'];
    $powner=$_POST['powner'];
    $created_by=$_POST['created_by'];

    $sql=mysqli_query($conn,"INSERT INTO products(p_id,pname,pownername,created_by) VALUES('','$pname','$powner','$created_by')");
    if($sql){
        header('location: product.php');
    }else{
        header('location: addition.php');
    }
}
?>