<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Export</title>
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="container my-5 p-5">
        <form action="insert.php" method="post" class="container bg-light rounded p-4 border my-5" style="width: 40%;">
            <h1>Export product</h1><hr>
            <div class="input-group">
                <div class="form-floating">
                   <select name="pid" id="" class="form-select">
                        <option selected>Product Id</option>
                        <?php
                        include '../include/connection.php';
                        $sql=mysqli_query($conn,"SELECT * FROM products");
                        while($r=mysqli_fetch_array($sql)) { ?>
                        <option value="<?php echo $r['p_id'] ?>"><?php echo $r['p_id']?> </option>
                        <?php } ?>
                    </select>
                    <label for="floatingInputGroup2">Product Id</label>
                </div>
            </div>
            <div class="input-group my-2">
                <div class="form-floating">
                    <input type="int" name="quantity" value="" placeholder="" id="floatingInputGroup2" class="form-control">
                    <label for="floatingInputGroup2">Quantity</label>
                </div>
            </div>
            <div class="input-group my-2">
                <div class="form-floating">
                    <select name="created_by" id="" class="form-select">
                        <option selected>Create By</option>
                        <?php
                        include '../include/connection.php';
                        $sql=mysqli_query($conn,"SELECT * FROM users");
                        while($r=mysqli_fetch_array($sql)) { ?>
                        <option value="<?php echo $r['user_id'] ?>"><?php echo $r['username']?> </option>
                        <?php } ?>
                    </select>
                    <label for="floatingInputGroup2">Create By</label>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <button type="submit" name="submit" class="btn btn-outline-success col-12">Export Product</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>