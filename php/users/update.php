<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
</head>
<body>
    <?php
    include '../include/connection.php';
    $sql=mysqli_query($conn,"SELECT * FROM users WHERE user_id='$_GET[upd]'");
    $r=mysqli_fetch_array($sql);
    ?>
    <div class="container my-5 p-5">
        <form action="" method="post" class="container bg-light rounded p-4 border my-5" style="width: 40%;">
            <h1>Update</h1><hr>
            <div class="input-group">
                <div class="form-floating">
                    <input type="text" name="username" value="<?php echo $r['username']; ?>" placeholder="" id="floatingInputGroup2" class="form-control">
                    <label for="floatingInputGroup2">Username</label>
                </div>
            </div>
            <div class="input-group my-2">
                <div class="form-floating">
                    <input type="text" name="password" value="<?php echo $r['password']; ?>" placeholder="" id="floatingInputGroup2" class="form-control">
                    <label for="floatingInputGroup2">password</label>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <button type="submit" name="submit" class="btn btn-outline-success col-12">Update</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>

<?php
include '../include/connection.php';

if(isset($_POST['submit'])){
    $name=$_POST['username'];
    $password=$_POST['password'];

    $sql=mysqli_query($conn,"UPDATE users SET username='$name',`password`='$password' WHERE user_id='$_GET[upd]'");
    if($sql){
        header('location: user.php');
    }else{
        header('location: update.php');
    }
}
?>