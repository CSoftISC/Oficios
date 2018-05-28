<!DOCTYPE html>
<html>
<head>
    <title>Que quiero ver?</title>
    <meta charset="UTF-8">
    <title>Conserje</title>
    <link rel="stylesheet" href="css/style.css";>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flexboxgrid/6.3.1/flexboxgrid.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- <link rel="stylesheet" type="text/css" href="./css/font-awesome.min.css">-->
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
            <i id="loader" class="fa fa-spinner fa-spin" ></i>
         </div>

</head>
<body class="Body-Videos">
    <audio id="pip">
     <source src="audios/menu/ogg/pip.ogg">
     <source src="audios/menu/mp3/pip.mp3">
 </audio>
    <div class="container-fluid">
        <center>
        <h1 id='titulo'>¿Qué quiero ver?</h1>
        <div class="fila">
            <div class="opcion-oficio">
                <div class="imagencont"  style="background-color:#2346c4"; >
                    <center>
                        <a href="video.php?img=janitor.png"><img src="img/janitor.png" class="img-circular"></a>
                    </center>
                </div>
                <center>
                    <h4><b>Conserje</b></h4>
                </center>
            </div>
            <div class="opcion-oficio">
                <div class="imagencont" style="background-color: #a15000;">
                    <center>
                        <a href="video.php?img=carpinter.png"><img src="img/carpinter.png" class="img-circular"></a>
                    </center>
                </div>
                <center>
                    <h4><b>Carpintero</b></h4>
                </center>
            </div>
            <div class="opcion-oficio">
                <div class="imagencont" style="background-color:#e9ff00";>
                    <center>
                        <a href="video.php?img=carwash.png"><img id="carwash" src="img/carwash.png" class="img-circular"></a>
                    </center>
                </div>
                <center>
                    <h4><b>Lava Carros</b></h4>
                </center>
            </div>
            <div class="opcion-oficio">
                <div class="imagencont" style="background-color: #ff0015">
                    <center>
                        <a href="video.php?img=cocinero.png"><img src="img/cocinero.png" class="img-circular" href="https://www.freepik.com/free-vector/set-of-smiling-cook-in-different-postures_1134640.htm"></a>
                    </center>
                </div>
                <center>
                    <h4><b>Cocinero</b></h4>
                </center>
            </div>
        </div>
        <br>
        <div class="fila">
            <div class="opcion-oficio">
                <div class="imagencont" style="background-color:#35ff23">
                    <center>
                        <a  href="video.php?img=jardinero.png"><img src="img/jardinero.png" class="img-circular" href="https://www.freepik.com/free-vector/gardener_797079.htm"></a>
                    </center>
                </div>
                <center>
                    <h4><b>Jardinero</b></h4>
                </center>
            </div>
            <div class="opcion-oficio">
                <div class="imagencont" style="background-color: #e55937">
                    <center>
                        <a href="video.php?img=bombero.png"><img  src="img/bombero.png" class="img-circular" href="https://www.freepik.com/free-vector/set-vector-icons-of-small-children-different-professions_1215574.htm"></a>
                    </center>
                </div>
                <center>
                    <h4><b>Bombero</b></h4>
                </center>
            </div>
            <div class="opcion-oficio">
                <div class="imagencont" style="background-color: #6a006a">
                    <center>
                        <a href="video.php?img=bolero.png"><img src="img/bolero.png" class="img-circular"></a>
                    </center>
                </div>
                <center>
                    <h4><b>Bolero</b></h4>
                </center>
            </div>
        </div>
        </center>


           <script src="js/jquery-3.3.1.min.js"></script>


    <script type="text/javascript">
        $(document).ready(function(){
document.getElementsByTagName("body")[0].style.cursor = "url('js/Arrow.cur'), auto";
});
        window.addEventListener("load", function(){
            //var loader = document.getElemtnBydId('loader');

            $('#box-loader').fadeOut(5000);

        });
         var audio = $("#pip")[0];
        $(".img-circular").mouseenter(function() {
        audio.play();
        });
    </script>
</body>
</html>