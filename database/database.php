<?php
$conn=mysqli_connect('localhost','root','');
$db=mysqli_query($conn,"CREATE DATABASE cargo_db");
if($db){
    echo "Created";
}else{
    echo "not created";
}
?>