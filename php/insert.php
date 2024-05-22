<?php
include 'include/connection.php';

session_start();
if(isset($_POST['submit'])){
    $name=$_POST['username'];
    $password=$_POST['password'];

    $sql=mysqli_query($conn,"INSERT INTO users(user_id,username,password) VALUES('','$name','$password')");
    if($sql){
        $_SESSION['name']=$name;
        header('location: welcome/welcome.php');
    }else{
        header('location: index.php');
    }
}
?>