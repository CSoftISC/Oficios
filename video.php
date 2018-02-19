<?php 
$img= $_GET['img'];
if($img=='janitor.png'){
	$title="Conserje";
}elseif($img=='carpinter.png'){
	$title="Carpintero";
}elseif($img=='carwash.png'){
	$title="Carpintero";
}elseif($img=='cocinero.png'){
	$title="Cocinero";
}elseif($img=='jardinero.png'){
	$title="Jardinero";
}elseif($img=='bombero.png'){
	$title="Bombero";
}elseif($img=='bolero.png'){
	$title="Bolero";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $title ?></title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flexboxgrid/6.3.1/flexboxgrid.min.css">
</head>
<body>
	<center>
		<table>
			<tbody>
				<td id="jan">
					<img src="img/<?php echo $img ?>" href="https://www.freepik.com/free-photos-vectors/truck">
				</td>
				<td>
					<video controls> 
						<source src="Mi bebe.mp4" type="video/mp4">
					</video>
				</td>
				<td class="buttons">
					<a href=""><img src="img/replay.png" alt="Circle with X in the middle."></a>
					<br>
					<a href=""><img src="img/exit.png" alt="Circle with an arrow in the middle."></a>
				</td>
			</tbody>
		</table>
	</center>
</body>
</html>