<?php
include 'conn.php';
//$id=$_GET['id'];
//echo $id;
//$sql='delete from details where id=$id';
//mysqli_query($conn,$sql);
    $id = $_GET['id'];
    echo $id;
$sql="delete from details where id=$id";
mysqli_query($conn,$sql);
header('location:display.php');
?> 