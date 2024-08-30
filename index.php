<?php
require 'animal.php';
require 'Ape.php';    
require 'Frog.php';  

$sheep = new Animal("shaun");
echo "name: " . $sheep->name; 
echo "<br>";
echo "legs: " . $sheep->legs; 
echo "<br>";
echo "cold blooded: " . $sheep->cold_blooded; 
echo "<br>";

$kodok = new Frog("buduk");
echo "<br>";
echo "name: " . $kodok->name; 
echo "<br>";
echo "legs: " . $kodok->legs; 
echo "<br>";
echo "cold blooded: " . $kodok->cold_blooded; 
echo "<br>";
echo "jump: ";
$kodok->jump(); 
echo "<br>";


$sungokong = new Ape("kera sakti");
echo "name: " . $sungokong->name; 
echo "<br>";
echo "legs: " . $sungokong->legs; 
echo "<br>";
echo "cold blooded: " . $sungokong->cold_blooded; 
echo "<br>";
echo "yell: ";
$sungokong->yell(); 

echo "<br>";

?>