<?php


include("connection.php");
 ?>

<?php
if(isset($_POST['newdepartment'])){
    $departmentName=$_POST['department'];
    if($departmentName == null){
        echo "please fill department name";
    }
  
    $query= "INSERT INTO `department`(`departmentid`, `departmentname`) VALUES ('','$departmentName')";
    $a=mysqli_query($conn,$query);
  }

// if($a){
//     header("location: index.php?massage=new department is registerd !!");
// }else{
//     echo"error:".mysqli_error($conn);
// }

?>


<?php

if(isset($_POST['newTeacher'])){
    $firstNAme=$_POST['first_name'];
    $lastNAme=$_POST['last_name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $department=$_POST['department'];
    $query="INSERT INTO  teacher ( `teacherid`,`first_name`, `last_name`, `email`, `phone_number`, `department`) values('$firstNAme','$lastNAme','$email','$phone','$department')";
    $test=mysqli_query($conn,$query);
    if($test){
      header("Location: inde.php");
    }else{
      die("Error").mysqli_error($conn);
    }
  
  }
  

?>

<?php

if(isset($_POST['newstudent'])){
    $firstNAme=$_POST["first_name"];
    $lastNAme=$_POST["last_name"];
    $email=$_POST["email"];
    $department=$_POST["department"];
    $query="INSERT INTO `student`(`studentid`, `first_name`, `last_name`, `email`, `department`) VALUES ('','$firstNAme','$lastNAme','$email','$department')";
    $test=mysqli_query($conn,$query);
    if($test){
      header("Location: ind.php");
    }else{
      die("Error").mysqli_error($conn);
    }
  
  }
  


  
if(isset($_POST['update_teacher'])){
    $id=$_POST["teacherid"];
    $firstNAme=$_POST["first_name"];
    $lastNAme=$_POST["last_name"];
    $email=$_POST["email"];
    $phone=$_POST["phone_number"];
    $department=$_POST["department"];
    $query="UPDATE `Teacher` SET `first_names`='$firstNAme',`last_name`='$lastNAme',`email`='$email',`phone_number`='$phone',`department`='$department' WHERE `teacherid`=$id";
    $test=mysqli_query($conn,$query);
    if($test){
      header("Location: inde.php");
    }else{
      die("Error").mysqli_error($conn);
    }
  
  }
  
  if(isset($_GET['a'])){
    $teacherid=$_GET['a'];
    $q="delete from Teacher where teacherid=$teacherid";
    $r=mysqli_query($conn,$q);
    if($r){
      header("Location: inde.php");
    }else{
      die("error").mysqli_error($conn);
    }
  
  }





  if(isset($_POST['update_student'])){
    $id=$_POST["studentid"];
    $firstNAme=$_POST["first_name"];
    $lastNAme=$_POST["last_name"];
    $email=$_POST["email"];
    $department=$_POST["department"];
    $query="UPDATE `student` SET `first_names`='$firstNAme',`last_name`='$lastNAme',`email`='$email',`department`='$department' WHERE `id`=$id";
    $test=mysqli_query($conn,$query);
    if($test){
      header("Location: ind.php");
    }else{
      die("Error").mysqli_error($conn);
    }
  
  }
  
  if(isset($_GET['a'])){
    $teacherid=$_GET['a'];
    $q="delete from student where studentid=$studentid";
    $r=mysqli_query($conn,$q);
    if($r){
      header("Location: ind.php");
    }else{
      die("error").mysqli_error($conn);
    }
  
  }


  


  if(isset($_POST['updatedepartment'])){
    $departmentid=$_POST["departmentid"];
    $departmentNAme=$_POST["departmentname"];
    $query="UPDATE `department` SET `departmentname`='$departmentNAme' WHERE `departmentid`=$departmentid";
    $test=mysqli_query($conn,$query);
    if($test){
      header("Location: index.php");
    }else{
      die("Error").mysqli_error($conn);
    }
  
  }

  if(isset($_GET['a'])){
    $departmentid=$_GET['a'];
    $query="delete from department where departmentid=$departmentid";
    $row=mysqli_query($conn,$query);
    if($row){
      header("Location: index.php");
    }else{
      die("error").mysqli_error($conn);
    }
  
  }



if(isset($_POST['register'])){
    $username=$_POST["names"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    $role=$_POST["role"];
    $query="INSERT INTO `users`(`id`, `names`, `email`, `password`, `role`) VALUES ('','$username','$email','$password','$role')";
    $test=mysqli_query($conn,$query);
    if($test){
      header("Location: login.php");
    }else{
      die("Error".mysqli_error($conn));
    }
  
  }
  ?>

  <?php
  
  if(isset($_POST['login'])){    
    $password=$_POST["password"];
    $email=$_POST['email'];
    $query="SELECT `id`, `names`, `email`, `password`, `role` FROM `users` WHERE `email`='$email' AND `password`='$password'";
    $test=mysqli_query($conn,$query);
    $a= mysqli_fetch_assoc($test);
    if($a !=null){
      if($a['role'] =='teacher'){
         header("location:inde.php");
      }elseif($a['role'] == 'student'){
        header("Location : ind.php");

      }
   }else{
    header("location:login.php?message='incolect user name and password'");
   }
  }

?>