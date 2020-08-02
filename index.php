<?php
require('Animal.php');
require('Frog.php');
require('Ape.php');

$sheep = new Animal("Shaun");
echo $sheep->name."<br>";
echo $sheep->legs."<br>";
var_dump($sheep->cold_blooded);
echo "<br>";

$kodok = new Frog("buduk");
$kodok->jump() ; // "hop hop"
echo "Nama Animal Frog ini adalah ".$kodok->name."<br>";

$sungokong = new Ape("kera sakti");
$sungokong->yell(); // "Auooo"
echo "Nama Animal Ape ini adalah ".$sungokong->name."<br>";
?>