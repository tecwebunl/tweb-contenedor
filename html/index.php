<?php

//Crear conexion
$conn = mysqli_connect("db","tweb","password","tweb");

//Veifica conexión
if (!$conn) {
	die("Conexion fallida:" . mysqli_connect_error());
}
echo "Conexion satisfactoria";

$query = "SELECT * FROM materia";
$result = mysqli_query($conn, $query);

echo "<h1>Contenido de la base de datos:</h1>";

while($record = mysqli_fetch_assoc($result))
{
	echo "<h2>".$record["id"]." ".$record["nombre"]."</h2>";
}
?>
