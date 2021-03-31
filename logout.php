<?php

session_start();

setcookie('login', '' , time() - 3600 , '/');
header("location:http://localhost/almaaz_PROJECT/home-page.php");
exit();

?>