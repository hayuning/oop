<?php
require('Animal.php');

$sheep = new Animal("Shaun");
echo $sheep->name."<br>";
echo $sheep->legs."<br>";
var_dump($sheep->cold_blooded);
?>