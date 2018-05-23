<?php 
$img= $_GET['img'];
if($img=='janitor.png'){
	$title="Conserje";
	$video="conserje.mp4";
}elseif($img=='carpinter.png'){
	$title="Carpintero";
	$video="carpintero.mp4";
}elseif($img=='carwash.png'){
	$title="Lava Carros";
	$video="Lava Carros.mp4";
}elseif($img=='cocinero.png'){
	$title="Cocinero";
	$video="Cocinero.mp4";
}elseif($img=='jardinero.png'){
	$title="Jardinero";
	$video="Jardinero.mp4";
}elseif($img=='bombero.png'){
	$title="Bombero";
	$video="bombero.mp4";
}elseif($img=='bolero.png'){
	$title="Bolero";
	$video="Bolero.mp4";
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
<body class="Body-V"> 
	<center>
		<table>
			<tbody>
				<td id="jan">
					<img src="img/<?php echo $img ?>" href="https://www.freepik.com/free-photos-vectors/truck">
				</td>
				<td>
					<video controls> 
						<source src="videos/<?php echo $video;?>" type="video/mp4">
					</video>
				</td>
				<td class="buttons">
<a href="menuvideos.php"><img src="img/exit.png" alt="Circle with an arrow in the middle." style="width: 100px; height: 100px "></a>
<a href=""><img src="img/replay.png" alt="Circle with a plus sign in the middle." style="width: 110px; height: 100px "></a>
				</td>
			</tbody>
		</table>
	</center>
</body>
</html>