var startpos;
var intentos = 0;
var aciertos = 0;
$(document).ready(function(){
  $( function() {
    $( ".draggable").draggable({
      start: function(event, ui){
        startpos = ui.position
      },
      stop: stopDrag
    });
  });
});

function stopDrag(event, ui) {
	if (inContainer(ui.helper)) {
  	  intentos++;
  	  if (!ui.helper.attr("dropLeft")) {
  	    	mostrarError();
  	    	regresarPosOriginal(ui.helper);
  	  } else {
  	  	aciertos++;
  	  	mostrarAcierto()
  	  	var left = ui.helper.attr("dropLeft");
  	  	var top = ui.helper.attr("dropTop");
  	  	ui.helper.animate({ "top": top, "left": left });
  	  	ui.helper.draggable('disable');
  	  }
  	} else {
  		regresarPosOriginal(ui.helper)
  	}
  	if(intentos == 7) {
		juegoterminado();
  	}
  
}

function juegoterminado(){
    var idoficio = $("#id-oficio").attr("value");
    var form = document.createElement("form");
    form.setAttribute("method", "post");
    form.setAttribute("action", "juegoterminado.php");

    var cal = aciertos*100/7;
    cal = Math.round(cal);
    var hiddenField = document.createElement("input");
    hiddenField.setAttribute("type", "hidden");
    hiddenField.setAttribute("name", "cal");
    hiddenField.setAttribute("value", cal);
    form.appendChild(hiddenField);

    var hiddenField = document.createElement("input");
    hiddenField.setAttribute("type", "hidden");
    hiddenField.setAttribute("name", "oficio");
    hiddenField.setAttribute("value", idoficio);
    form.appendChild(hiddenField);

    var hiddenField = document.createElement("input");
    hiddenField.setAttribute("type", "hidden");
    hiddenField.setAttribute("name", "url");
    hiddenField.setAttribute("value", window.location.href);
    form.appendChild(hiddenField);
    document.body.appendChild(form);
    form.submit();

}

function regresarPosOriginal(elemento) {
  elemento.animate({"top": startpos.top, "left": startpos.left})
}

function inContainer(elemento) {
  var contenedor = $("#contenedor");
  var cont_l = contenedor.position().left;
  var elemLeft = elemento.offset().left + elemento.width()/2;

  return (elemLeft > cont_l);
  
}

function mostrarError() {
  var text = $("<p>").html("<b>Intentemos de nuevo!</b>");
  var contenedor = $("#contenedor")
  mitadWidth = $("body").width() / 2 - 200 ;
  reproducirSonido('de_new');
  text.css({"position":"absolute", "top":"50px", "left": mitadWidth+"px", "font-size": "50px", "color": "red","font-family": "BioRhyme, serif", "text-shadow": "-1px 0 black, 0 1px black, 1px 0 black, 0 -1px black"})
  $("body").append(text);
  setTimeout(function(){
    text.remove();
  },500)
}

function mostrarAcierto() {
  var text = $("<p>").html("<b>Muy bien!</b>")
  var contenedor = $("#contenedor")
  mitadWidth = $("body").width() / 2 - 70 ;
  reproducirSonido('bienhecho');
  text.css({"position":"absolute", "top":"50px", "left": mitadWidth+"px", "font-size": "50px", "color": "yellow","font-family": "BioRhyme, serif", "text-shadow": "-1px 0 black, 0 1px black, 1px 0 black, 0 -1px black"})
  $("body").append(text);
  setTimeout(function(){
    text.remove();
  },500)
}

function reproducirSonido(sonido){
  var audio = document.getElementById(sonido);
audio.play();
}
