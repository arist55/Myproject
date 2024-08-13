<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="work.php" method="POST">
        <input type="number"name="number1">
        <input type="submit"name="factoriol"value="factoriol">
    </form>
    <?php

function factoriol($n){
    $fact=1;
    for($i=1 ;$i<=$n;$i++){
        if ($n>0){
            $fact=$fact*$i;
    }
        }
     echo $fact;
    }
    
    if(isset($_POST['factoriol'])){
        $n=$_POST['number1'];
        factoriol($n);  
    } 
    ?>



    <form action="work.php" method="POST">
        <input type="number"name="number1">
        <input type="submit"name="primenumber"value="primenumber">
    </form>
    <?php
    $count= 0;
   function primenumber($a){
    $count=0;
    for($i=1 ;$i<=$a;$i++){
        if($a%$i==0){
            $count=$count+1;
     }}
if($count==2){
echo "this number is prime";
}
else{
    echo "this number is not prime";
}
   }
   if(isset($_POST['primenumber'])){
    $a=$_POST['number1'];
    primenumber($a);  
}
    ?>
</body>
</html>
