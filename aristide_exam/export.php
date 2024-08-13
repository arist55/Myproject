
<form action="" method="POST">
    <input type="number" name="number">
    <input type="submit" value=" submit" name=" submit">
</form>


<?php

    
    function factorial($n){
        $fact=1;
      for( $i=1; $i=$fact; $i++){
        $fact=$fact*$i;
      }echo $fact;
    }
    if(isset($_POST['submit'])){
     $n=$_POST['number'];
     factorial($n);
    }
    
?>


<!-- <form action="backend" method=" POST">
    <input type="number" name="number">
    <input type="submit" value="submit" name=" submit">
</form> -->

<?php
// $sum($num);
// function sum($num){
//     for($i=2;$i=$num;$i++){
//         $num=$num+2
//     }
// }
// echo"$num";
// if(isset($_POST['number']))
//          $_post['submit'];
//         sum(3);
?>