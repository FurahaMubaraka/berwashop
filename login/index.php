<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create account</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="container my-5 p-2">
        <form action="create.php" method="post" class="my-5 container p-3 bg-light rounded" style="width: 40%;border: 1px solid green;">
            <h1>Registartion Form</h1><hr>
            <div class="input-group my-2">
                <div class="form-floating">
                    <input type="text" name="username" placeholder="" id="" class="form-control" >
                    <label for="floatingInputGroup2">Username</label>
                </div>
            </div>
            <div class="input-group my-2">
                <div class="form-floating">
                    <input type="text" name="password" placeholder="" id="" class="form-control" >
                    <label for="floatingInputGroup2">Password</label>
                </div>
            </div>
            <button class="btn btn-outline-success col-12 p-2" name="submit">Register</button>
            <hr class="mb-5">
            <div class="text-center mb-3">
                Already have an account? <a href="login.php">Login.</a>
            </div>
        </form>
    </div>
</body>
</html>