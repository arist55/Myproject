<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <?php
    function sum($num){
        for($i=1;$i<=10;$i++){
            echo $i."+".$num."=".$i+$num;
        }
    }
    sum(2);
  ?>    
</body>
</html>