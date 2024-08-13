<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// $names="karisa";
// echo $names;

// $names="uwimana";
// echo $names;




// $color= array('white','green','red','blue','black');
// echo "The memory of that scene for me is like a frame of film
//  forever frozen at that moment: the $color[2] carpet,
//   the $color[1] lawn, the $color[0] house, the leaden sky.
//    The new president and his first lady. - Richard M. Nixon" . "\n";



// $color = array('white', 'green', 'red');
// foreach($color as $c){
//     echo "$c, ";
// }
// sort($color);
// echo "<ul>";

//     echo "<li>$color[0]</li>";
//     echo "<li>$color[1]</li>";
//     echo "<li>$color[2]</li>";

// echo "</ul>";




// $ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>
//               "Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava",
//               "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>
//               "Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid",
//               "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>
//               "Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest",
//               "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;


// asort($ceu);
// foreach ($ceu as $country => $capital) {
//     echo "The capital of $country is $capital" . "\n"."<br/>";
// }




// $x = array(1, 2, 3, 4, 5);
// var_dump($x);
// unset($x[3]);
// $x = array_values($x);
// echo ''."<br/>";
// var_dump($x);


// $color = array(4 => 'white', 6 => 'green', 11=> 'red');
// echo reset($color) . "\n";


// function w3rfunction($value, $key) {
//     echo "$key : $value" . "\n"."<br/>";
// }
// $a = '{"Title": "The Cuckoos Calling",
//       "Author": "Robert Galbraith",
//       "Detail": { 
//                   "Publisher": "Little Brown"
//                  }
//      }';
// $j1 = json_decode($a, true);
// array_walk_recursive($j1, "w3rfunction");



// $original = array( '1', '2', '3', '4', '5' );
// echo 'Original array : ' . "\n"."<br/>";
// foreach ($original as $x) {
//     echo "$x";
// }
// $inserted = '$';
// echo "<br/>";
// array_splice($original, 3, 0, $inserted);
// echo " \n After inserting '$' the array is : " . "\n"."<br/>";
// foreach ($original as $x) {
//     echo "$x ";
// }
// echo "\n";




// echo "
// Associative array : Ascending order sort by value";
// $array2 = array("Sophia" => "31", "Jacob" => "41", "William" => "39", "Ramesh" => "40");
// asort($array2);
// foreach ($array2 as $y => $y_value) {
//     echo "Age of " . $y . " is : " . $y_value . ""."<br/>";
// }
// echo "
// Associative array : Ascending order sort by Key";
// $array3 = array("Sophia" => "31", "Jacob" => "41", "William" => "39", "Ramesh" => "40");
// ksort($array3);
// foreach ($array3 as $y => $y_value) {
//     echo "Age of " . $y . " is : " . $y_value . ""."<br/>";
// }
// echo "
// Associative array : Descending order sorting by Value";
// $age = array("Sophia" => "31", "Jacob" => "41", "William" => "39", "Ramesh" => "40");
// arsort($age);
// foreach ($age as $y => $y_value) {
//     echo "Age of " . $y . " is : " . $y_value . ""."<br/>";
// }
// echo "
// Associative array : Descending order sorting by Key";
// $array4 = array("Sophia" => "31", "Jacob" => "41", "William" => "39", "Ramesh" => "40");
// krsort($array4);
// foreach ($array4 as $y => $y_value) {
//     echo "Age of " . $y . " is : " . $y_value . ""."<br/>";
// }




// $month_temp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,
// 68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";

// $temp_array = explode(',', $month_temp);
// $tot_temp = 0;
// $temp_array_length = count($temp_array);
// foreach($temp_array as $temp)
// {
//  $tot_temp += $temp;
// }
// $avg_high_temp = $tot_temp / $temp_array_length;
// echo "Average Temperature is : " . $avg_high_temp . ""."<br/>";
// sort($temp_array);
// echo " List of five lowest temperatures :";
// for ($i = 0; $i < 5; $i++)
// { 
//     echo $temp_array[$i] . ", ";
// }
// echo "<br/>"."List of five highest temperatures :";
// for ($i = ($temp_array_length - 5); $i < $temp_array_length; $i++)
// {
//     echo $temp_array[$i] . ", ";
// }



// function columns($uarr)
// {
//     $n = $uarr;
//     if (count($n) == 0)
//         return array();
//     else if (count($n) == 1)
//         return array_chunk($n[0], 1);
//     array_unshift($uarr, NULL);
//     $transpose = call_user_func_array('array_map', $uarr);
//     return array_map('array_filter', $transpose);
// }
// function bead_sort($uarr)
// {
//     foreach ($uarr as $e)
//         $poles [] = array_fill(0, $e, 1);
//     return array_map('count', columns(columns($poles)));
// }
// echo 'Original Array : ' . '';
// print_r(array(5, 3, 1, 3, 8, 7, 4, 1, 1, 3));
// echo '."<br/>"
// '.'After Bead sort : ' . '';
// print_r(bead_sort(array(5, 3, 1, 3, 8, 7, 4, 1, 1, 3)));




?>
</body>
</html>