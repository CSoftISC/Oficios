<?php 

require "conexion.php";
$query = "Select id, nombre from Oficios";  
$oficiosquery = $conn->query($query);
$oficios = array();
while($oficio=$oficiosquery->fetch_assoc()){
	$oficios[] = $oficio;
}
$query = "Select id, nombre from Usuarios order by id";
$alumnosresult =$conn->query($query);
$query = "call promedios()";
$promedios = $conn->query($query);
$alumnos = array();
while($alumno=$alumnosresult->fetch_assoc()){
	$alumnos[]=	$alumno;
}
?>
<html>

<head>

	<script src="js/plotly.min.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
</head>
<body>
 

<center>
<div id="promedioAlumno" style="width:800px;height:650px;"></div>
<div id="promedioOficio" style="width:800px;height:650px;"></div>
<center>
<script>
	//promedio general por alumno 
	promedioAlumno = document.getElementById('promedioAlumno');
	data = [{
			x: [
				<?php 
				foreach($alumnos as $alumno){
					echo "'".$alumno['nombre']."',";
				}
				?>
			],
			y: [
				<?php 
				while($promedio=$promedios->fetch_assoc()){
					echo $promedio['promedio'].',';
				}	

					$conn->next_result();
				?>
			],
			type: 'bar'
	}];
	var layout = {
		title: "Promedios generales por alumno"	
	}
	Plotly.newPlot( promedioAlumno, data, layout);
	var promediosPorOficio = {};
	var alumnos = [];

<?php 
	$query = "call promedioPorOficio()";
	$resultado = $conn->query($query);
	$promedios = array();
	while($fila = $resultado->fetch_assoc()) {
		$usuarioId = $fila['usuarioId'];
		$promedio = $fila['promedio'];
		$oficioId = $fila['oficioId'];
		$promedios[$usuarioId][$oficioId] = $promedio;	
	}
	foreach($alumnos as $alumno){
		$nombre = $alumno['nombre'];
		echo "alumnos.push('$nombre');";
		$id = $alumno['id'];
		echo "promediosPorOficio['$id'] = [];";	
		foreach($oficios as $oficio){
			$idOficio = $oficio['id'];
			if(isset($promedios[$id][$idOficio])){
				$p =$promedios[$id][$idOficio];
				echo "promediosPorOficio['$id'].push($p);\n";
			}else {
				echo "promediosPorOficio['$id'].push(0);\n";
			}
		}
	}
?>
	graficasPorAlumno();
	function graficasPorAlumno() {
		var x = [
				<?php 
				foreach($oficios as $oficio){
					echo "'".$oficio['nombre']."',";
				}
				?>
		];
		data = [];
		for(var i = 1; i < Object.keys(promediosPorOficio).length + 1; i++){
				trace = {
						x: x, 
						y: promediosPorOficio[i], 
						type: 'lines+markers',
						name: alumnos[i-1],
						marker: {
						  size: 8
						},
						line: {
  						  width: 5
  						}

				}	
				data.push(trace);
		}
		var layout = {
			title: "Promedios por oficio"	
		}
		promedioOficio = document.getElementById('promedioOficio');
		Plotly.newPlot(promedioOficio, data, layout);
	}
</script>
</body>
</html>
