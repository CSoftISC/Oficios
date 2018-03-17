<?php 
include 'conexion.php';
$cal = $_POST['cal'];
$oficio = $_POST['oficio'];
$id = $_SESSION['id'];
$nombre = $_SESSION['nombre'];
$ap_materno = $_SESSION['ap_materno'];
$ap_paterno = $_SESSION['ap_paterno'];
$query = "insert into Calificaciones(id, aciertos, fecha, id_usuario, id_oficios) values($nombre, $cal, $id, $oficio);"
$resultado = $conn->query($query);
echo $resultado;
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Juego terminado</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flexboxgrid/6.3.1/flexboxgrid.min.css">
</head>
<body>
	<h1>Bien hecho</h1>
	<div>obtuviste <?php echo $cal; ?></div>
</body>
</html>
