
<?php
include("connection.php"); 



if(isset($_POST['register'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $query="INSERT INTO `manager`(`manageId`, `username`, `password`) VALUES ('','$username','$password')";
    $test=mysqli_query($conn,$query);
    if($test){
      header("Location: login.php");
    }else{
      die("Error".mysqli_error($conn));
    }
  
  }

    
  if(isset($_POST['login'])){   
    $username=$_POST['username'];
    $password=$_POST['password'];
    $checkusername="SELECT username FROM manager WHERE username='$username'";
    $count=mysqli_query($count,$checkusername);
    $query="INSERT INTO `manager`(`manageId`, `username`, `password`) VALUES ('','$username','$password')";
    $test=mysqli_query($conn,$query);
    $a= mysqli_fetch_assoc($test);
    if($result == true){
         header("location:home.php");
      }elseif($result == false){
    header('location:login.php');
   }
die("error".mysqli_error($conn));
  }
   



  if(isset($_POST['newfurniture'])){
    $furnitureNAme=$_POST["furniture_name"];
    $owner_NAme=$_POST["owner_name"];
    $query="INSERT INTO funiture(furniture_name,owner_name) values('$furnitureNAme','$owner_NAme')";
    $test=mysqli_query($conn,$query);
    if($test){
      header("Location: furniture.php");
    }else{
      die("Error").mysqli_error($conn);
    }
  
  }
?> 
 