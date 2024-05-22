<?php
include 'include/connection.php';
session_start();
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $conn->real_escape_string($_POST['username']);
    $password = $conn->real_escape_string($_POST['password']);

    $select="SELECT * FROM users WHERE username='$name' AND password='$password'";
    $query = $conn->query($select);
    if($query->num_rows == 1){
        $row_data = $query->fetch_assoc();
        $_SESSION['name']= $row_data['username'];
        $_SESSION['id']= $row_data['user_id'];
        header('location: welcome/welcome.php');
    }else{
        header('location: index.php');
    }

}
?>