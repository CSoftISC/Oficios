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

$query = "Select nombre, imagen from Usuarios where id=$id;";
$res = $conn->query($query);
$alumno = $res->fetch_assoc();
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
   	<script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="./js/drag.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
   
</head>
<body>
	  <audio id="lograste">
     <source src="audios/ogg/lograste.ogg">
     <source src="audios/mp3/lograste.mp3">
 </audio>
 	<center>
    <divs style="background-color: black; border-radius: 5px; color: white;"><?php echo $alumno['nombre']; ?> <img style="width: 100px; height: 100px; border-radius: 50%" src="<?php echo $alumno['imagen']; ?>"/></div>
    </center>
	<div class="container-fluid">
		<center>
		<h1 id="titulo">Bien hecho</h1>
		<h2 class="calificacion">Obtuviste <?php echo $cal; ?></h2>
		<div>
		<a class="boton" style=shrink hover href="<?php echo $url;?>">Jugar de Nuevo</a>
		<a class="boton" href="menujuegos.php">Ver Otros Juegos</a>
		</div>
		</center>
	</div>
	<script type="text/javascript">
		  reproducirSonido('lograste');
	</script>
</body>
</html>
