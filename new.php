<?php 

include('enlace.php');

$nombre = $_POST[nombre];
$extras = $_POST[extras];

unset($_POST['nombre']);
unset($_POST['extras']);

mysqli_query($enlace, "INSERT INTO productos (nombre, extras) VALUES ('$nombre', '$extras')");

header('Location:index.php');

?>