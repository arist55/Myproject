<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
<!-- <form action="" method="POST">
        <input type="text"name="number">
        <input type="submit"name="findmax"value="findmax">
    </form> -->
    <?php
//    function findmax($arr){
// if(!is_array($arr)|| empty($arr)){
//     echo"invalid input or empty array";
//     return;

// } 
//    $maxvalue = max($arr);
//     echo "maxvalue;".$maxvalue;
//     return $maxvalue;
//    }

//     if(isset($_POST['findmax'])){
//         $a=$_POST['number'];
//         $arr=array_map('intval',explode(',',$a));
//         findmax($arr);
//     }




    // $num =12;
    // function fib($num){
    //     if($num ==0){
    //         return 0;
    //     }
    //     else if($num == 1){
    //         return 1;
    //     }
    //     else{
    //         return(fib($num-1) + fib($num-2));
    //     }
    // }
    // for ($i=0; $i <=$num; $i++){
    //     echo fib($i)." ";
    // }




function palindrome($str){
    $str_len=strlen($str)-1;
    $output.=$str[$x];
    for($x=$str_len;$x>=1;$x--){
        $output.=$str[$x];
    }
    if($output == $str){
        echo "pallindrome";
    }else{
        echo "not palindrome";
    }
}
palindrome("noon");
?>