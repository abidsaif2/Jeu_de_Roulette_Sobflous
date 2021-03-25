<?php

$serveur = "localhost";
$login = "admin";
$pass = ""

try{
$connexion = new PDO("mysql:host=$serveur;dbname=sobflous", $login, $pass);
}
?>