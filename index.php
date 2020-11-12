<?php

require('animal.php');
require('Ape.php');
require('Frog.php');

$sheep = new Animal("shaun");

//Release 0
echo $sheep->name; // "shaun"
echo "<br>";
echo $sheep->legs; // 2
echo "<br>";
echo $sheep->cold_blooded; // false
echo "<br> <br>";

//Release 1
$sungokong = new Ape("kera sakti");
echo "Nama Ape : $sungokong->name <br>";
echo "Yell Ape : ";
$sungokong->yell(); // "Auooo"
echo "<br> <br>";

$kodok = new Frog("buduk");
echo "Nama Frog : $kodok->name <br>";
echo "Jumlah kaki kodok : $kodok->legs <br>";
echo "Jump Frog : ";
$kodok->jump(); // "hop hop"
