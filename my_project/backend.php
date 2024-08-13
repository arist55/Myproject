<?php
include("connection.php"); 

// if(isset($_POST['newdepartment'])){
//     $departmentName=$_POST['department'];
//     if($departmentName == null){
//         echo "please fill department name";
//     }
  
//     $query= "INSERT INTO Department(departmentname) values('$departmentName')";
//     $a=mysqli_query($conn,$query);
//   }

// if($a){
//     header("location: index.php?massage=new department is registerd !!");
// }else{
//     echo"error:".mysqli_error($conn);
// }
?>



<?php
  
// if(isset($_POST['update_teacher'])){
//     $id=$_POST["teacherid"];
//     $firstNAme=$_POST["first_name"];
//     $lastNAme=$_POST["last_name"];
//     $email=$_POST["email"];
//     $phone=$_POST["phone_number"];
//     $department=$_POST["department"];
//     $query="UPDATE `Teacher` SET `first_names`='$firstNAme',`last_name`='$lastNAme',`email`='$email',`phone_number`='$phone',`department`='$department' WHERE `id`=$id";
//     $test=mysqli_query($conn,$query);
//     if($test){
//       header("Location: inde.php");
//     }else{
//       die("Error").mysqli_error($conn);
//     }
  
//   }
  
//   if(isset($_GET['a'])){
//     $teacherid=$_GET['a'];
//     $q="delete from Teacher where teacherid=$teacherid";
//     $r=mysqli_query($conn,$q);
//     if($r){
//       header("Location: inde.php");
//     }else{
//       die("error").mysqli_error($conn);
//     }
  
//   }

if(isset($_POST['register'])){
    $name=$_POST['names'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $role=$_POST['role'];
    $query="INSERT INTO `users`(`id`, `names`, `email`, `password`, `role`) VALUES ('','$name','$email','$password','$role')";
    $test=mysqli_query($conn,$query);
    if($test){
      header("Location: login.php");
    }else{
      die("Error".mysqli_error($conn));
    }
  
  }



  if(isset($_POST['login'])){    
    $password=$_POST['password'];
    $name=$_POST['names'];
    $query="SELECT `id`, `names`, `password`, FROM `users` WHERE `names`='$name' AND `password`='$password'";
    $test=mysqli_query($conn,$query);
    $a= mysqli_fetch_assoc($test); 
    if($a !=null){
      if($a['role'] =='store_in'){
        header("location:store_in.php");
     }elseif($a['role'] == 'user'){
       header("Location : login.php");

     }
   }else{
    header("location:login.php?message='incolect user name and password'");
   }
  }

?>

<?php

if(isset($_POST['newfurniture'])){
    $furnitureNAme=$_POST['furnitureName'];
    $price=$_POST['price'];
    $phone=$_POST['phoneNumber'];
    $date=$_POST['date'];
    $number=$_POST['number'];
    $query="INSERT INTO `store_in`(`storeid`, `furnitureName`, `price`, `phoneNumber`, `date`, `number`) VALUES ('','$furnitureNAme','$price','$phone','$date','$number')";
    $test=mysqli_query($conn,$query);
    if($test){
      header("Location: store_in.php");
    }else{
      die("Error").mysqli_error($conn);
    }
  
  }

  if(isset($_POST['update_store_in'])){
    $storeid=$_POST['storeid'];
    $furnitureNAme=$_POST['furnitureName'];
    $price=$_POST['price'];
    $phoneNumber=$_POST['phoneNumber'];
    $date=$_POST['date'];
    $number=$_POST['number'];
    $query="UPDATE `store_in` SET `storeid`='$storeid',`furnitureName`='$furnitureNAme',`price`='$price',`phoneNumber`='$phoneNumber',`date`='$date',`number`='$number' WHERE `storeid`='$storeid'";
    $test=mysqli_query($conn,$query);
    if($test){
      header("Location: store_in.php");
    }else{
      die("Error").mysqli_error($conn);
    }
  
  }
  
  if(isset($_GET['a'])){
    $storeid=$_GET['a'];
    $query="delete from store_in where storeid=$storeid";
    $row=mysqli_query($conn,$query);
    if($row){
      header("Location: store_in.php");
    }else{
      die("error").mysqli_error($conn);
    }
  
  }





  if(isset($_POST['outfurniture'])){
    $furnitureNAme=$_POST['furnitureName'];
    $price=$_POST['price'];
    $phone=$_POST['phoneNumber'];
    $date=$_POST['date'];
    $number=$_POST['number'];
    $query="INSERT INTO `storeout`(`storeid`, `furnitureName`, `price`, `phoneNumber`, `date`, `number`) VALUES ('','$furnitureNAme','$price','$phone','$date','$number')";
    $test=mysqli_query($conn,$query);
    if($test){
      header("Location: storeout.php");
    }else{
      die("Error").mysqli_error($conn);
    }
  
  }

  if(isset($_POST['update_furniture'])){
    $storeid=$_POST['storeid'];
    $furnitureNAme=$_POST['furnitureName'];
    $price=$_POST['price'];
    $phoneNumber=$_POST['phoneNumber'];
    $date=$_POST['date'];
    $number=$_POST['number'];
    $query="UPDATE `storeout` SET `storeid`='$storeid',`furnitureName`='$furnitureNAme',`price`='$price',`phoneNumber`='$phoneNumber',`date`='$date',`number`='$number' WHERE `storeid`='$storeid'";
    $test=mysqli_query($conn,$query);
    if($test){
      header("Location: storeout.php");
    }else{
      die("Error").mysqli_error($conn);
    }
  
  }
  
  if(isset($_GET['a'])){
    $storeid=$_GET['a'];
    $query="delete from storeout where storeid=$storeid";
    $row=mysqli_query($conn,$query);
    if($row){
      header("Location: storeout.php");
    }else{
      die("error").mysqli_error($conn);
    }
  
  }

?>