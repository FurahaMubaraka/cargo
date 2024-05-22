<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Export</title>
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
</head>
<body>
<?php
    include '../include/connection.php';
    $sql=mysqli_query($conn,"SELECT * FROM export WHERE exp_id='$_GET[upd]' ");
    $on=mysqli_fetch_array($sql);
    ?>
    <div class="container my-5 p-5">
        <form action="" method="post" class="container bg-light rounded p-4 border my-5" style="width: 40%;">
            <h1>Update Export</h1><hr>
            <div class="input-group">
                <div class="form-floating">
                <select name="pid" id="" class="form-select">
                        <option  selected value="<?php echo $on['p_id'] ?>"><?php echo $on['p_id'] ?></option>
                        <?php
                        include '../include/connection.php';
                        $sql=mysqli_query($conn,"SELECT * FROM products");
                        while($er=mysqli_fetch_array($sql)) { ?>
                        <option value="<?php echo $er['p_id'] ?>"><?php echo $er['p_id']?> </option>
                        <?php } ?>
                    </select>
                    <label for="floatingInputGroup2">Product Id</label>
                </div>
            </div>
            <div class="input-group my-2">
                <div class="form-floating">
                    <input type="int" name="quantity" value="<?php echo $on['quantity'] ?>" placeholder="" id="floatingInputGroup2" class="form-control">
                    <label for="floatingInputGroup2">Quantity</label>
                </div>
            </div>
            <div class="input-group my-2">
                <div class="form-floating">
                   <select name="created_by" id="" class="form-select">
                       <?php
                        $rw=$on['created_by'];
                        $sql1=mysqli_query($conn,"SELECT username FROM users WHERE user_id='$rw'");
                        $sd=mysqli_fetch_array($sql1);
                        ?>
                        <option  selected value="<?php echo $rw ?>"><?php echo $sd['username'] ?></option>
                        <?php
                        include '../include/connection.php';
                        $sql=mysqli_query($conn,"SELECT * FROM users");
                        while($er=mysqli_fetch_array($sql)) { ?>
                        <option value="<?php echo $er['user_id'] ?>"><?php echo $er['username']?> </option>
                        <?php } ?>
                    </select>
                    <label for="floatingInputGroup2">Create By</label>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <button type="submit" name="submit" class="btn btn-outline-success col-12">Add Product</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>

<?php
include '../include/connection.php';

if(isset($_POST['submit'])){
    $pid=$_POST['pid'];
    $qnty=$_POST['quantity'];
    $created_by=$_POST['created_by'];

    $sql=mysqli_query($conn,"UPDATE export SET p_id='$pid',quantity='$qnty',created_by='$created_by' WHERE exp_id='$_GET[upd]' ");
    if($sql){
        header('location: export.php');
    }else{
        header('location: export.php');
    }
}
?>