<?php
include '../include/connection.php';

$sql=mysqli_query($conn,"DELETE FROM export WHERE exp_id='$_GET[dlt]'");
if($sql){
    header('location: export.php');
}else{
    header('location: export.php');
}

?>