<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>log in</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="container my-5 p-5">
        <form action="logincheck.php" method="POST" class="container bg-light rounded p-4 border my-5" style="width: 40%;">
            <h1>Login Form</h1><hr>
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
                    <button type="submit"  class="btn btn-outline-success col-12">Login</button>
                </div>
            </div>
            <div class="my-2 mt-4">
                <div class="text-center">
                    I Don't have an account?<a href="index.php">Create new account</a>
                </div>
            </div>
        </form>
    </div>
</body>
</html>