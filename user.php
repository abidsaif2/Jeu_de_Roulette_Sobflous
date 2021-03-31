<?php 

session_start();

$servername = "localhost";
$username = "root";
$database = "fortune";
$password = "";

$conn = new mysqli($servername, $username, $password , $database);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$nom=$_POST["fname"];
$phone=$_POST["fphone"];
$mail=$_POST["femail"];
$pass=$_POST["fpassword"];

$sql = "INSERT INTO user (Email, nomUser, NumTel , MDP)
VALUES ('$mail', '$nom', '$phone' ,'$pass')";

if ($conn->query($sql)  === TRUE) {
$cookie_name = "login";
$cookie_value = "true";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
echo($_COOKIE['login']) ;

  echo "Bienvenue sur SOBFLOUS";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header("location:http://localhost/almaaz_PROJECT/home-page.php");
exit();

?>