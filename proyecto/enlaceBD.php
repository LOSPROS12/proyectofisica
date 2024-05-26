<?php
$servidor = "localhost";
$usuario = "root";
$password = "";
$database = "cuestionario_m3s1";
// crear conexion
$conexion = mysqli_connect($servidor,$usuario,$password,$database);
//checar conexion
if ($conexion->connect_error){
die("connection failed:" .$conexion->connect_error);
}
echo "conexion establecida";
$db=mysqli_select_db($conexion,$database) or die ("<p>no hay conexion en la bd</p>");

$NOMBRE = $_POST['NOMBRE'] ?? '';
$pregunta1 = $_POST['pregunta1'] ?? '';
$pregunta2 = $_POST['pregunta2'] ?? '';
$pregunta3 = $_POST['pregunta3'] ?? '';
$pregunta4 = $_POST['pregunta4'] ?? '';
$pregunta5 = $_POST['pregunta5'] ?? '';
$pregunta6 = $_POST['pregunta6'] ?? '';
$pregunta7 = $_POST['pregunta7'] ?? '';
$pregunta8 = $_POST['pregunta8'] ?? '';

$sql="INSERT INTO `cuestionario`(`NOMBRE`, `pregunta1`, `pregunta2`, `pregunta3`, `pregunta4`, `pregunta5`, `pregunta6`, `pregunta7`, `pregunta8`)  VALUES ('$NOMBRE','$pregunta1','$pregunta2','$pregunta3','$pregunta4','$pregunta5','$pregunta6','$pregunta7','$pregunta8')";
if (mysqli_query($conexion, $sql)){
echo "new record created successfully";
}else{
echo "error: ".$sql . "<br>".mysqli_error($conexion);
}
mysqli_close($conexion);
echo("registro agregado");
?>
