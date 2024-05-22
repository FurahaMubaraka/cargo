<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Product</title>
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
</head>
<body>
<?php
    include '../include/connection.php';
    $sql=mysqli_query($conn,"SELECT * FROM products WHERE p_id='$_GET[upd]'");
    $r=mysqli_fetch_array($sql);
    ?>
    <div class="container my-5 p-5">
        <form action="" method="post" class="container bg-light rounded p-4 border my-5" style="width: 40%;">
            <h1>Update product</h1><hr>
            <div class="input-group">
                <div class="form-floating">
                    <input type="text" name="pname" value="<?php echo $r['pname'] ?>" placeholder="" id="floatingInputGroup2" class="form-control">
                    <label for="floatingInputGroup2">Product Name</label>
                </div>
            </div>
            <div class="input-group my-2">
                <div class="form-floating">
                    <input type="text" name="powner" value="<?php echo $r['pownername'] ?>" placeholder="" id="floatingInputGroup2" class="form-control">
                    <label for="floatingInputGroup2">Product Owner name</label>
                </div>
            </div>
            <div class="input-group my-2">
                <div class="form-floating">
                    <select name="created_by" id="" class="form-select">
                        <?php
                        $rw=$r['created_by'];
                        $sql1=mysqli_query($conn,"SELECT username FROM users WHERE user_id='$rw'");
                        $sd=mysqli_fetch_array($sql1);
                        ?>
                        <option  selected value="<?php echo $rw ?>"><?php echo $sd['username'] ?></option>
                        <?php
                        $sql=mysqli_query($conn,"SELECT * FROM users");
                        while($r=mysqli_fetch_array($sql)) { ?>
                        <option value="<?php echo $r['user_id'] ?>"><?php echo $r['username'];?> </option>
                        <?php } ?>
                    </select>
                    <label for="floatingInputGroup2">Create By</label>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <button type="submit" name="submit" class="btn btn-outline-success col-12">Update Product</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
<?php
include '../include/connection.php';

if(isset($_POST['submit'])){
    $pname=$_POST['pname'];
    $powner=$_POST['powner'];
    $created_by=$_POST['created_by'];

    $sql=mysqli_query($conn,"UPDATE products SET pname='$powner',pownername='$pname',created_by='$created_by' WHERE p_id='$_GET[upd]' ");
    if($sql){
        header('location: product.php');
    }else{
        header('location: update.php');
    }
}
?>