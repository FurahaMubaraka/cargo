<?php
include 'connection.php';

$users=mysqli_query($conn,"CREATE TABLE users(user_id int not null primary key auto_increment ,username varchar(200),password varchar(200) unique)");
if($users){
    echo "users are created";
}else{
    echo "users not created";
}

$product=mysqli_query($conn,"CREATE TABLE products (`p_id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY, `pname` VARCHAR(200) , `pownername` VARCHAR(200) , `created_at` DATE DEFAULT CURRENT_TIMESTAMP , `created_by` int ,foreign key(created_by) references users(user_id)))");
if($product){
    echo "product are created";
}else{
    echo "product not created";
}

$import=mysqli_query($conn,"CREATE TABLE import (imp_id int not null primary key auto_increment ,p_id int foreign key(p_id) references products(p_id),quantity int,importdate date defaut (current_timestamp),created_by varchar(200) foreign key(created_by) references users(user_id)");
if($import){
    echo "import are created";
}else{
    echo "import not created";
}
$export=mysqli_query($conn,"CREATE TABLE export (exp_id int not null primary key auto_increment ,p_id int foreign key(p_id) references products(p_id),quantity int,exportdate date defaut (current_timestamp),created_by varchar(200) foreign key(created_by) references users(user_id)");
if($export){
    echo "export are created";
}else{
    echo "export not created";
}
?>
