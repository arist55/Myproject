<?php 
include("Connection.php");
error_reporting(E_ALL);
ini_set('display_errors', 1);

include('Connection.php');
if(isset($_POST['managerRegistration'])){
    $names=$_POST['names'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    
    $checkUsername="SELECT username FROM Manager where username ='$username'";
    $count=mysqli_query($conn,$checkUsername);
    if(mysqli_fetch_assoc($count) != null){
        echo "Username already exists";
        return;
    }
    if(strlen($password)!=8){
        echo "password is to short";
    }
    $query="INSERT INTO Manager (username,password,names) VALUES('$username','$password','$names')";
    $insert =mysqli_query($conn,$query);
    if($insert){
        echo "Registration Successful";
    }else{
        die("Registration failed".mysqli_error($conn));
    }
}
?>