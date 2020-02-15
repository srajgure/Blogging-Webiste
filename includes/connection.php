<?php

//$conn = mysqli_connect("localhost","globappq_blog","blog123","globappq_guest_blog");

$conn = mysqli_connect("localhost","root","root","gse");
//$pdo=new PDO('mysql:host=localhost;dbname=globappq_guest_blog','globappq_blog','blog123');
$pdo=new PDO('mysql:host=localhost;dbname=gse','root','root');
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}  
?>