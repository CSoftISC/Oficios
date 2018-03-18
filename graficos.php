<?php 
require "conexion.php";
$query = "Select id, nombre from Usuarios order by id";
$alumnos =$conn->query($query);
$query = "call promedios()";
$promedios = $conn->query($query);
?>
<html>

<head>
	<script src="js/plotly.min.js"></script>
</head>
<body>
<center>
<div id="promedioAlumno" style="width:800px;height:650px;"></div>
<div id="promedioOficio" style="width:800px;height:650px;"></div>
<center>
<script>
	promedioAlumno = document.getElementById('promedioAlumno');
	data = [{
			x: [
				<?php 
				while($alumno=$alumnos->fetch_assoc()){
					echo "'".$alumno['nombre']."',";
				}
				?>
			],
			y: [
				<?php 
				while($promedio=$promedios->fetch_assoc()){
					echo $promedio['promedio'].',';
				}	
				?>
			],
			type: 'bar'
	}];
	var layout = {
		title: "Promedios generales por alumno"	
	}
	Plotly.newPlot( promedioAlumno, data, layout);
	data = []
</script>
</body>
</html>
