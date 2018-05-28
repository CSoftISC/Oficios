<?php
include "conexion.php";
if(isset($_POST['nombre'])){
  
   if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"img/users/".$file_name);
      }
      }else{
          alert($errors);
   
   }

    $nombre = $_POST['nombre'];
    $ap_paterno = $_POST['ap_paterno'];
    $ap_materno = $_POST['ap_materno'];
    $query = "insert into Usuarios(nombre, ap_materno, ap_paterno,imagen) values ('$nombre', '$ap_materno', '$ap_paterno', '$file_name');";
    $result = $conn->query($query);
    $_POST['username'] = $nombre;
}
if(isset($_POST['username'])){
	$nombre = $_POST['username']; 
	$query = "Select id, nombre, ap_materno, ap_paterno from Usuarios where nombre = '$nombre'";
	$result = $conn->query($query);
	if($row=$result->fetch_assoc()) {
		session_start();
		$_SESSION['id'] = $row['id'];
		$_SESSION['nombre'] = $row['nombre'];
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
 <script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js" integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+"  crossorigin="anonymous"></script>
      <style type="text/css">
            
            #box-loader{
                position: fixed;
                background:rgba(0,0,0 ,0.733);
                opacity: 1;
                top: 0px;
                width: 100%;
                height: 100vh;
                z-index: 1000;

            }

            #loader{
                position: relative; 
                top: 50%; 
                left: 47%; 
                font-size: 5rem; 
                color: #fff;
            }

        </style>
<body>
   <div id="box-loader">
    <i id="loader" class="fa fa-spinner fa-spin" style="position: absolute; top: 50%; left: 47%; font-size: 5rem; color: #fff;"></i>
    
  </div>
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
      <div class="content2",  style="position: relative; left: 250px; top: 40px;">
        <h2>Agregarme
        </h2>
        <form method="post" action="" enctype="multipart/form-data">
          <div class="form-group">
            <input type="text" name="nombre" pattern="[A-Za-z]*" required placeholder="Mi nombre es..." />
            <input type="text" name="ap_paterno" pattern="[A-Za-z]*" placeholder="Mi primer apellido es..." />
            <input type="text" name="ap_materno" pattern="[A-Za-z]*" placeholder="Mi segundo apellido es..." />
            <input type="number" name="edad" pattern="[0-9]" placeholder="Mi edad es..." />
          <button type="button" style="font-size: 15px;" onclick="document.getElementById('imagen').click();">Subir imagen</button><input id="imagen" type="file" name ="image"  style="display:none;"> 
          </div>
          <button type="reset" id="goLeft" class="off">Cancelar</button>
          <button type="submit">Agregame!</button>
        </form>
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
<script type="text/javascript">
    window.addEventListener("load", function(){
      //var loader = document.getElemtnBydId('loader');
      $(document).ready(function(){
document.getElementsByTagName("body")[0].style.cursor = "url('js/Arrow.cur'), auto";
});
      $('#box-loader').fadeOut(3000);

    });
  </script>
</body>
</html>
