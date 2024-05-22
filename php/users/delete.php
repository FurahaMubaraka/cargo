<?php
include '../include/connection.php';

if($_SERVER['REQUEST_METHOD'] == 'GET'){
    $id = $_GET['user_id'];

$sql2= " DELETE FROM products WHERE created_by='$id'";
$sql1= " DELETE FROM users WHERE user_id='$id'";



if($conn->query($sql2) === TRUE && $conn->query($sql1) === TRUE ){
    header('location: user.php');
}else{
    echo "not deleted";
    // header('location: user.php');
}
}

?>