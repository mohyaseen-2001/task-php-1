
<?php
echo"hi\n";
$x="messi<br/>";
echo "$x";
?>

<?php

function isLeapYear($year) {
    if (($year % 4 == 0 && $year % 100 != 0) 
        || ($year % 400 == 0)) {
        return true;
    } else {
        return false;
    }
}

$year = 2017;

if (isLeapYear($year)) {
    echo "Leap Year<br/>";
} else {
    echo "Not a Leap Year<br/>";
}

?>
<?php
$temperature = 27;

if ($temperature < 20) {
    echo "It is wintertime<br/>!";
} else {
    echo "It is summertime!<br/>";
}
?>



<?php
$firstnum=3;
$secondnum=3;
$sum=$firstnum+$secondnum;
if($firstnum==$secondnum){
echo"the output is",$sum*3,"<br/>";
}else{
    echo"‘It is summertime!’<br/>";
}
?>
<?php

 $num=3;
 $multi=0;
 if($num%3==0){

 echo"output =",$multi=$num/3,"<br/>";
 }else{
    echo"false";
 }

?>

<?php
$integer=readline("enter the num");
if($integer<=20 && $integer>=50){

echo"false <br/>";
}else{
echo "true <br/>";


}


?>

<?php
$number1=54;
$number2= 34;
$number3= 135;
if($number1>$number2|| $number1>$number3){

echo "this is large number",$number1,"<br/>";
}elseif($number2>$number1|| $number2<$number3){

echo "this is large number",$number2,"<br/>";
}else{

echo "this is large number",$number3,"<br/>";
}


?>



<?php
$calc1 = 24;
$calc2 = 43; 

if ($calc2 != 0) {
    $division = $calc1 / $calc2;
} else {
    $division = 0; 
}

$Addition = $calc1 + $calc2;
$subs = $calc1 - $calc2;
$Multiplication = $calc1 * $calc2;

echo "subs = ", $subs, "<br/>";
echo "Addition = ", $Addition, "<br/>";
echo "Division = ", $division, "<br/>";
echo "Multiplication = ", $Multiplication, "<br/>";
?>
<?php
$age=20;
if($age> 20){
echo"elegibal","<br/>";

}else{

echo"is not eligabl","<br/>";
}

?>

<?php
$usernumbe= 0;
if($usernumbe>0){

echo "negative","<br/>";
}elseif($usernumbe== 0){

echo "zero","<br/>";
}else{
    echo "positive","<br/>";
}
?>
<?php
$scores = [85, 90, 78, 92, 88]; 

$total = array_sum($scores);
$count = count($scores);
$average = $total / $count;

echo "Final Average: " . $average . "<br/>";

if ($average >= 90) {
    $grade = "A (Excellent)";
} elseif ($average >= 80) {
    $grade = "B (Very Good)";
} elseif ($average >= 70) {
    $grade = "C (Good)";
} elseif ($average >= 60) {
    $grade = "D (Pass)";
} else {
    $grade = "F (Fail)";
}

echo "Grade: " . $grade,"<br/>";
?>

<?php
$colors = ['white', 'green', 'red'];

echo "The memory of that scene for me is like a frame of film forever frozen at that moment: the " . $colors[2] . " carpet, the " . $colors[1] . " lawn, the " . $colors[0] . " house, the leaden sky. The new president and his first lady. - Richard M. Nixon","<br/>";

echo"<ul>";


echo"<ul/>";

?>

<?php
$cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> 
"Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => 
"Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", 
"Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", 
"Portugal"=>"Lisbon", "Spain"=>"Madrid" );  
asort($cities);

foreach($cities as $country => $city) {

echo"The capital of"," ".$country,"is"," ".$city,"<br/>";
}
?>
<?php
$color = array (4 => 'white', 6 => 'green', 11=> 'red');
echo"the first elemnt","  ",$color[4],"<br/>"



?>
<?php
$numberarray = array(0=>'1', 1=>'2', 2=>'3', 3=>'4', 4=>'5', 5=>6);

echo "the array is = <pre>";
print_r($numberarray);
echo "</pre>";
$numberarray[4]='$';
echo "the array is = <pre>";
print_r($numberarray);
echo "</pre>";
?>
<?php
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c
" => "apple");

asort($fruits);

print_r($fruits);

?>
<?php
$avaregearray = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72,
65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);

sort($avaregearray);
$avg = array_sum($avaregearray) / count($avaregearray);

echo "Count of elements: " . count($avaregearray) . "<br>"; 

echo "Average is: " . $avg . "<br><br>";

$lowest_seven = array_slice($avaregearray, 0, 7);
echo "Lowest 7 values: <pre>";
print_r($lowest_seven);
echo "</pre>";

$highest_seven = array_slice($avaregearray, -7);
echo "Highest 7 values: <pre>";
print_r($highest_seven);
echo "</pre>";

?>
<?php

$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid"
, 4);

$array3 =array(array_merge($array1, $array2));
print_r($array3);
echo"<br/>";

?>
<?php
$colorsq = array("red","blue", "white","yellow");
$upper = array_map("strtoupper", $colors);
$lower = array_map("strtolower", $colors);

print_r($upper);
echo"<br/>";


print_r($lower);
echo"<br/>";

?>
<?php


?>

<?php
$numbersofarrayq = range(200, 250);

foreach ($numbersofarrayq as $num) {
    if ($num % 4 == 0) {
        echo $num . " ";
    }
}
?>
<?php
$words = array("abcd", "abc", "de", "hjjj", "g", "wer");

$longest = $words[0];  
$shortest = $words[0]; 

foreach ($words as $word) {
    
    if (strlen($word) > strlen($longest)) {
        $longest = $word; 
    }
    
    if (strlen($word) < strlen($shortest)) {
        $shortest = $word; 
    }
}

echo " the longest " . $longest . "<br>";
echo "the shorter " . $shortest . "<br>";
?>
<?php
$randomnumber = range(10,20);
shuffle($randomnumber);
print_r($randomnumber);
?>

<?php
$array1 = array(2, 0, 10, 12, 6);

$filtered_array = array_filter($array1); 

$lowest = min($filtered_array);

echo $lowest; 
?>

<?php
echo "<br/>";

for ($i = 1; $i <= 10; $i++) {
    echo $i;
    
    if ($i < 10) {
        echo "-";
    }
}
?>
<?php
$total = 0;

for ($i = 0; $i <= 30; $i++) {
    $total += $i;
}

echo "<br>" . $total; 
?>
<?php
for ($row = 1; $row <= 5; $row++) {

    for ($col = 1; $col <= 5; $col++) {

        if ($row == 1) {
            echo "A ";
        } 
        elseif ($row == 2 && ($col == 4 || $col == 5)) {
            echo "B ";
        } 
        elseif ($row == 3 && ($col == 3 || $col == 4 || $col == 5)) {
            echo "C ";
        } 
        elseif ($row == 4 && $col >= 2) {
            echo "D ";
        } 
        elseif ($row == 5) {
            echo "E ";
        } 
        else {
            echo "A ";
        }

    }
    echo "<br>";
}
?>
<?php
for ($row = 1; $row <= 5; $row++) {
    for ($col = 1; $col <= 5; $col++) {
        if ($row == 1) {
            echo "1 ";
        } 
        elseif ($row == 2 && ($col == 4 || $col == 5)) {
            echo "2 ";
        } 
        elseif ($row == 3 && ($col == 3 || $col == 4 || $col == 5)) {
            echo "3 ";
        } 
        elseif ($row == 4 && $col >= 2) {
            echo "4 ";
        } 
        elseif ($row == 5) {
            echo "5 ";
        } 
        else {
            echo "1 ";
        }
    }
    echo "<br>";
}
?>

<?php
for ($row = 1; $row <= 5; $row++) {
    for ($col = 1; $col <= 5; $col++) {
        if ($row == $col) {
            echo $col . " ";
        } else {
            echo "0 ";
        }
    }
    echo "<br>";
}
?>
