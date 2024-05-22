<?php
$conn=mysqli_connect('localhost','root','','berwashop');
// $db=mysqli_query($conn,"CREATE DATABASE berwashop");
// $tb=mysqli_query($conn,"CREATE TABLE shopkeeper(shopkeeperid int not null primary key auto_increment,username varchar(200),password varchar(200))");
// if($tb){echo "created";}else{echo "not created";}
// $tb=mysqli_query($conn,"CREATE TABLE product(productcode int not null primary key auto_increment,productname varchar(200))");
// if($tb){echo "created";}else{echo "not created";}
$tb=mysqli_query($conn,"CREATE TABLE productin(productcode int foreign key(productcode) references product(productcode),`date` date default  CURRENT_TIMESTAMP,quantity int,uniqueprice int,totalprice int)");
if($tb){echo "created";}else{echo "not created";}
?>