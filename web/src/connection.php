
<?php
//estos datos se añaden en todas las páginas php que deben acceder a la BD
$servername = "bd-mysql";
$username = "daw";
$password = "qwerty";
$dbname = "DAW";

// Creamos el objeto conexión
$conn = new mysqli($servername, $username, $password, $dbname);
// Comprobamos si todo OK
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
