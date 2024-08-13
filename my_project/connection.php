<?php

$hostname="localhost";
$username="root";
$password="";
$database="myproject";
$conn=mysqli_connect($hostname,$username,$password,$database);
if(!$conn){
   echo"database not connect";
}
?>