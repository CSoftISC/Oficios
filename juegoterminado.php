<?php 
session_start();
include 'conexion.php';
$cal = $_POST['cal'];
$oficio = $_POST['oficio'];
$url = $_POST['url'];
$id = $_SESSION['id'];
$nombre = $_SESSION['nombre'];
$ap_materno = $_SESSION['ap_materno'];
$ap_paterno = $_SESSION['ap_paterno'];
$query = "insert into Calificaciones(aciertos, fecha, id_usuario, id_oficios) values($cal, now(),$id, $oficio);";
$resultado = $conn->query($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	 <div style="position:absolute; left:400px; top:250px; width:10px; height:10px "> <img class="draggable" style=" width:550px; height:400px " src="img/well.png "></div>
	<meta charset="UTF-8">
	<title>Juego terminado</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flexboxgrid/6.3.1/flexboxgrid.min.css">
    <link rel="stylesheet" href="css/style.css">
   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
   
</head>
<body>
	<div class="container-fluid">
		<center>
		<h1 id="titulo">Bien hecho</h1>
		<h2 class="calificacion">Obtuviste <?php echo $cal; ?></h2>
		<div>
		<a class="boton" style=shrink hover> href="<?php echo $url;?>">Jugar de Nuevo</a>
		<a class="boton" href="menujuegos.php">Ver Otros Juegos</a>
		</div>
		</center>
	</div>
</body>
</html>
