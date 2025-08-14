<?php
$x = 34; 
$y = 23; 
$z = 15;
$fname = "Ella"; 
$lname = "Jerome";
if($x <= $z){
    echo "It is true";
}
else{
    echo "It is false";
}
echo "<br>";
if($y == $z){
    echo "Condition is not satisfied";
}
else if($y <= $z){
    echo "It is false";
}
else if($y < $z){
    echo "Condition is satisfied";
}
else{
    echo "Condition is false";
}
echo "<br>";
if(($x <= 35) &&($lname == "Jerome")){
    echo "It is true";
}
else{
    echo "It is false";
}
echo "<br>";
if(($x <= 35) ||($lname == "Ella")){
    echo "It is true";
}
else{
    echo "It is false";
}
echo "<br>";
$day = "Mother's day";
switch ($day){
    case "Sunday":
        echo "Today is Sunday";
        break;

    case "Monday":
        echo "Today is Monday";
        break;

    case "Tuesday":
        echo "Today is Tuesday";
        break;
    
    case "Wednesday":
        echo "Today is Wednesday";
        break;
    
    case "Thursday":
        echo "Today is Thursday";
        break;

    case "Friday":
        echo "Today is Friday";
        break;

    case "Saturday":
        echo "Today is Saturday";
        break;

    default:
    echo "Day does not exist";
}
echo "<br>";
$planet = 3;
switch ($planet){
    case 1:
        echo "First planet is Mecury";
        break;

    case 2:
        echo "Second planet is Venus";
        break;

    case 3:
        echo "Third planet is Earth";
        break;

    case 4:
        echo "Forth planet is Mars";
        break;

    case 5:
        echo "Fifth planet is Jupiter";
        break;

    case 6:
        echo "Sixth planet is Saturn";
        break;

    case 7:
        echo "Seventh planet is Uranus";
        break;

    case 8:
        echo "Eight planet is Neptune";
        break;

    case 9:
        echo "Ninth planet is Pluto";
        break;
    
    default:
    echo "Planet does not exist";
}
echo "<br>";
function greet(){
    echo "Good afternoon";
}
greet();
echo "<br>";
function name($fname){
    echo "My name is " . $fname;
}
name("Jerome");
echo "<br>";
function names($first_name, $last_name, $age){
    echo "People know me as " . $first_name . ", however my surname is " . $last_name . " and I am " . $age . " years old.";
}
names("Jerome", "Michael", 18);
echo "<br>";
function add($a, $b){
    echo "The sum of the numbers is " . $a + $b;
}
add(12, 12);
echo "<br>";
function SI($P, $R, $T){
    echo "Simple Interest is " . ($P * $R * $T) / 100;
}
SI(1000000, 5, 10);
echo "<br>";
$footballers = array("Messi", " Ronaldo", " Neymar", " Dybala", " Musiala");
echo $footballers[0];
echo "<br>";
echo count($footballers);
echo "<br>";
for ($i = 0; $i < 10; $i++){
    echo "The loop is " . $i . "<br>";
}
echo "<br>";
$x = 0;
while ($x < 15){
    echo "The loop is " . $x . "<br>";
    $x++;
}
echo "<br>";
$y = 0;
do{
    echo "The loop is " . $y . "<br>";
    $y++;
}
while ($y < 13);
echo "<br>";
//do reverse loop 20 - -5 and multiples of 5
$food = array("Rice", " Plantain", " Bread", " Beans", " Yam");
foreach($food as $value){
    echo $value . "<br>";
}
for($xx = 0; $xx <= 10; $xx++){
    if($xx == 4){
        break;
    }
    echo $xx . "<br>";
}
echo "<br>";
for($yy = 0; $yy <= 10; $yy++){
    if($yy == 4){
        continue;
    }
    echo $yy . "<br>";
}
echo "<br>";
echo date("Y/M/d");
echo "<br>";
echo date("Y");
echo "<br>";
echo date("y");
echo "<br>";
echo date("M");
echo "<br>";
echo date("m");
echo "<br>";
echo date("D");
echo "<br>";
echo date("d");
echo "<br>";
echo date("H");
echo "<br>";
echo date("h");
echo "<br>";
echo date("i");
echo "<br>";
echo date("s");
echo "<br>";
?>