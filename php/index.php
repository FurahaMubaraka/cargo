<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="container my-5 p-5">
        <form action="insert.php" method="post" class="container bg-light rounded p-4 border my-5" style="width: 40%;">
            <h1>Registration Form</h1><hr>
            <div class="input-group">
                <div class="form-floating">
                    <input type="text" name="username" placeholder="" id="floatingInputGroup2" class="form-control">
                    <label for="floatingInputGroup2">Username</label>
                </div>
            </div>
            <div class="input-group my-2">
                <div class="form-floating">
                    <input type="password" name="password" placeholder="" id="floatingInputGroup2" class="form-control">
                    <label for="floatingInputGroup2">password</label>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <button type="submit" name="submit" class="btn btn-outline-success col-12">Register</button>
                </div>
            </div>
            <div class="my-2 mt-4">
                <div class="text-center">
                    Already have an account?<a href="login.php">Login</a>
                </div>
            </div>
        </form>
    </div>
</body>
</html>