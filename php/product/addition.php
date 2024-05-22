<?php include '../include/nav.php'; ?>
<body>
    <div class="container my-5 p-5">
        <form action="insert.php" method="post" class="container bg-light rounded p-4 border my-5" style="width: 40%;">
            <h1>Additing product</h1><hr>
            <div class="input-group">
                <div class="form-floating">
                    <input type="text" name="pname" value="" placeholder="" id="floatingInputGroup2" class="form-control">
                    <label for="floatingInputGroup2">Product Name</label>
                </div>
            </div>
            <div class="input-group my-2">
                <div class="form-floating">
                    <input type="text" name="powner" value="" placeholder="" id="floatingInputGroup2" class="form-control">
                    <label for="floatingInputGroup2">Product Owner name</label>
                </div>
            </div>
            <div class="input-group my-2">
                <div class="form-floating">
                       <input type="hidden" name="created_by" value="<?php echo $_SESSION['id']; ?>" id="" class="form-control">
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