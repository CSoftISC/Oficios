var startpos;

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
    if (!ui.helper.attr("dropLeft")) {
      mostrarError();
      regresarPosOriginal(ui.helper);
      return;
    }
    mostrarAcierto()
    var left = ui.helper.attr("dropLeft");
    var top = ui.helper.attr("dropTop");
    ui.helper.animate({ "top": top, "left": left });
  } else {
    regresarPosOriginal(ui.helper)
  }
  
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
  console.log(text.width())
  mitadWidth = $("body").width() / 2 - 200 ;
  text.css({"position":"absolute", "top":"50px", "left": mitadWidth+"px", "font-size": "50px", "color": "red","font-family": "BioRhyme, serif", "text-shadow": "-1px 0 black, 0 1px black, 1px 0 black, 0 -1px black"})
  $("body").append(text);
  setTimeout(function(){
    text.remove();
  },500)
  console.log("error")
}

function mostrarAcierto() {
  var text = $("<p>").html("<b>Muy bien!</b>")
  var contenedor = $("#contenedor")
  console.log(text.width())
  mitadWidth = $("body").width() / 2 - 70 ;
  text.css({"position":"absolute", "top":"50px", "left": mitadWidth+"px", "font-size": "50px", "color": "yellow","font-family": "BioRhyme, serif", "text-shadow": "-1px 0 black, 0 1px black, 1px 0 black, 0 -1px black"})
  $("body").append(text);
  setTimeout(function(){
    text.remove();
  },500)
  console.log("acierto")
}