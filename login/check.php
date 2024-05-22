<?php
session_start();
include '../includes/connection.php';

if(isset($_POST['login'])){
    $name = $_POST['username'];
    $password = $_POST['password'];
    $_SESSION['name']=$name;
    $_SESSION['password']=$password;

    if(empty($name) && empty($password)){
        $_SESSION['error'] = "Username and password are required.";
        header('location: login.php');
        exit();
    }
    elseif(empty($name)){
        $_SESSION['error'] = "Username are required.";
        header('location: login.php');
        exit();
    }
    elseif(empty($password)){
        $_SESSION['error'] = "Password are required.";
        header('location: login.php');
        exit();
    }

    $sql =mysqli_query($conn,"SELECT * FROM shopkeeper WHERE username='$name' AND password='$password'");
    $query=mysqli_num_rows($sql);

    if($query > 0){
        $_SESSION['login'] = $name;
        header('location: ../welcome/welcome.php');
        exit();
    } else {
        $_SESSION['error'] = "Not found in Database create new account.";
        header('location: login.php');
        exit();
    }
}
?>
