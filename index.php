<?php
include "conexion.php";
if(isset($_POST['username'])){
	$nombre = $_POST['username']; 
	$query = "Select id, nombre, ap_materno, ap_paterno from Usuarios where nombre = '$nombre'";
	$result = $conn->query($query);
	if($row=$result->fetch_assoc()) {
		session_start();
		$_SESSION['id'] = $row['id'];
		$_SESSION['nombre']= $row['nombre'];
		$_SESSION['ap_materno'] = $row['ap_materno'];
		$_SESSION['ap_paterno'] = $row['ap_paterno'];
		echo '<meta http-equiv="refresh" content="0; url=menu.php"/>';
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <link type="text/css" rel="stylesheet" href="css/style_login.css">
<script src="js/jquery-3.3.1.min.js"></script>
</head>
<body>
	<script type="text/javascript">
		$(document).ready(function(){
  $('#goRight').on('click', function(){
    $('#slideBox').animate({
      'marginLeft' : '0'
    });
    $('.topLayer').animate({
      'marginLeft' : '100%'
    });
  });
  $('#goLeft').on('click', function(){
    $('#slideBox').animate({
      'marginLeft' : '50%'
    });
    $('.topLayer').animate({
      'marginLeft': '0'
    });
  });
});
	</script>
<div id="back">
  <div class="backRight"></div>
  <div class="backLeft"></div>
</div>

<div id="slideBox">
  <div class="topLayer">
    <div class="left">
      <div class="content">
        <h2>Agregarme</h2>
        <form method="post" onsubmit="return false;">
          <div class="form-group">
            <input type="text" placeholder="Mi nombre es..." />
          </div>
          <div class="form-group"></div>
          <div class="form-group"></div>
          <div class="form-group"></div>
        </form>
        <button id="goLeft" class="off">Cancelar</button>
        <button>Agregame!</button>
      </div>
    </div>
    <div class="right">
      <div class="content" style="position: relative; left: 250px; top: 150px;">
        <h2>Bienvenido!</h2>
		<form method="post" action="">
          <div class="form-group">
            <label for="username" class="form-label">Usuario:</label>
            <input name="username" type="text" />
          </div>
          <button id="goRight"  class="off" onclick="return false;" >Agregarme</button>
          	<button id="login" type="submit" >Entrar</button>
          </form>
          
      
      </div>
    </div>
  </div>
</div>

</body>
</html>
