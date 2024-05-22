<?php
include '../includes/connection.php';
$sql="DELETE FROM productin WHERE uniqueprice='$_GET[dlt]'";
$query=mysqli_query($conn,"$sql");
if($query){
    header('location: productin.php');
}else{
    header('location: productin.php');
}
?>