<?php
include '../includes/connection.php';
$sql="DELETE FROM product WHERE productcode='$_GET[dlt]'";
$query=mysqli_query($conn,"$sql");
if($query){
    header('location: product.php');
}else{
    header('location: product.php');
}
?>