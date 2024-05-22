<?php
include '../includes/connection.php';
$sql="DELETE FROM productout WHERE uniqueprice='$_GET[dlt]'";
$query=mysqli_query($conn,"$sql");
if($query){
    header('location: productout.php');
}else{
    header('location: productout.php');
}
?>