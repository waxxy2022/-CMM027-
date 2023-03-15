<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
echo "hello world";
$X = 23;
echo $X;
$Y = 40+15;
echo $Y;
echo "<br>";
echo "hello, world";
$username = $_GET["username"];
echo $username;
echo "<p> hello " . $username. "  How are you today? </p>";
$myname = "Frodo Baggins";
$myage = 111;
echo "My name is " . $myname . " and I am " . $myage ." years old ";
//comments in PHP
echo "<br>";

$name = "Adewale";
if ($name == "Adewa") {
    print "i know you!!";
}
else {
   print " who the fuck are you?";
}
echo "<br>";
//Activity specs, mugs and saussage
$myages= 1;
if ($myages <=18) {
    print " buy spec ";
}
elseif ($myages <= 20 ) {
    print " buy mugs and specs ";
}
else {
    print " buy saussage roll";
}
echo "<br>";
//using switch statements
$wantedgoods = "pigs";
switch ($wantedgoods) {
    case 'specs':
        echo "you have to be 16 to buy specs";
        break;
    case 'mugs':
        echo "you have to be 18 to buy nugs";
        break;
    case 'saussage':
        echo "you have to be over 21 to buy saussage";
        break;
    default:
        echo "you have not selected anything to buy ";
        break;
}
//using Array
$provisionedActivities= array("specs", "mugs", "saussage roll");
foreach($provisionedActivities as $x) {
    echo "<p>$x</p>";
  }  
$provisionedActivities[1]= "hugs";
echo $provisionedActivities;
unset($provisionedActivities[0]);
echo $x;


?>

</body>
</html>