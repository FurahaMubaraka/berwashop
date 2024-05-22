<?php
include '../includes/connection.php';
$sql="DELETE FROM shopkeeper WHERE shopkeeperid='$_GET[dlt]'";
$query=mysqli_query($conn,"$sql");
if($query){
    header('location: shopkeeper.php');
}else{
    header('location: shopkeeper.php');
}
?>