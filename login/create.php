<?php
include '../includes/connection.php';
session_start();
if(isset($_POST['submit'])){
    $name=$_POST['username'];
    $password=$_POST['password'];

    $sql="INSERT INTO shopkeeper(shopkeeperid,username,password) VALUES('','$name','$password')";
    $query=mysqli_query($conn,"$sql");

    if($query){
        $_SESSION['name']=$name;
        header('location: ../welcome/welcome.php');
    }else{
        header('location: login.php');
    }
}
?>