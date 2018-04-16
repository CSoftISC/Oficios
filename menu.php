<!DOCTYPE html>
<html>
<head>
	<title>Oficios</title>
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flexboxgrid/6.3.1/flexboxgrid.min.css"> -->
	<link rel="stylesheet" type="text/css" href="css/flexboxgrid.min.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/index.css">
	 <link rel="stylesheet" href="css/style.css">

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

</head>
<body>


	<div class="main row center-lg center-md center-sm center-xs">
		<div class="videos col-lg-6 col-md-6 col-sm-12 col-xs-12">
			<center>
                <a href="menuvideos.php"><img src="img/video-player.png"  class="img-circular">


                </a>
            	<h4>Videos</h4>
            </center>
		</div>
		<div class="juegos col-lg-6 col-md-6 col-sm-12 col-xs-12">
			<center>
                <a href="menujuegos.php"><img src="img/console.png" class="img-circular"></a>
            	<h4>Juegos</h4>
            </center>
		</div>
	</div>

	<div id="box-loader">
		<i id="loader" class="fa fa-spinner fa-spin" style="position: absolute; top: 50%; left: 47%; font-size: 5rem; color: #fff;"></i>
		
	</div>


	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>

	<script type="text/javascript">
		window.addEventListener("load", function(){
			//var loader = document.getElemtnBydId('loader');

			$('#box-loader').fadeOut();

		});
	</script>

</body>
</html>