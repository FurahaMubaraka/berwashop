<?php
session_start();

if(!isset($_SESSION['error'])){
    $_SESSION['error'] = '';
    $_SESSION['name'] = '';
    $_SESSION['password'] = '';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="container my-5 p-2">
        <form action="check.php" method="post" class=" container p-3 bg-light rounded col-4" style="border: 1px solid green;">
            <h1>Login Form</h1><hr>
            <?php if(!empty($_SESSION['error'])) { ?>
                <div class="alert bg-danger text-center text-white"><?php echo $_SESSION['error']; ?></div>
            <?php unset($_SESSION['error']); } ?>
            <div class="input-group my-2">
                <div class="form-floating">
                    <input type="text" name="username" value="<?php if(!empty($_SESSION['name'])) { echo $_SESSION['name']; }?>" placeholder="" id="" class="form-control" >
                    <label for="floatingInputGroup2">Username</label>
                </div>
            </div>
            <div class="input-group my-2">
                <div class="form-floating">
                    <input type="password" name="password" value="<?php if(!empty($_SESSION['password'])) { echo $_SESSION['password']; }?>" placeholder="" id="" class="form-control" >
                    <label for="floatingInputGroup2">Password</label>
                </div>
            </div>
            <button class="btn btn-outline-success col-12 p-2" name="login">Login </button>
            <hr class="mb-5">
            <div class="text-center mb-3">
                Don't have an account? <a href="index.php">Create an account</a>
            </div>
        </form>
    </div>
</body>
</html>
