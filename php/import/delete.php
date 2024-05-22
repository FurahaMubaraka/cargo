<?php
include '../include/connection.php';

$sql=mysqli_query($conn,"DELETE FROM import WHERE imp_id='$_GET[dlt]'");
if($sql){
    header('location: import.php');
}else{
    header('location: import.php');
}

?>