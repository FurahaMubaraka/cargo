<?php
include '../include/connection.php';

if(isset($_POST['submit'])){
    $pid=$_POST['pid'];
    $qnty=$_POST['quantity'];
    $created_by=$_POST['created_by'];

    $sql=mysqli_query($conn,"INSERT INTO export(exp_id,p_id,quantity,created_by) VALUES('','$pid','$qnty','$created_by')");
    if($sql){
        header('location: export.php');
    }else{
        header('location: addition.php');
    }
}
?>