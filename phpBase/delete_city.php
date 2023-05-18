<?php
include 'connect.php';

$id = $_GET['idCity'];

$sq="delete from city where idCity=$id";
mysqli_query($con,$sq);
header('location:viewall_city.php');
?>