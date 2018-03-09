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
  var cont_w = contenedor.width();
  var cont_h = contenedor.height();
  var cont_t = contenedor.position().top;
  var cont_l = contenedor.position().left;
  
  var elemLeft = elemento.offset().left + elemento.width()/2;
  var elemTop = elemento.offset().top+elemento.height()/2;

  return (elemLeft > cont_l && elemLeft < cont_l+cont_w  && elemTop > cont_t && elemTop < cont_t+cont_h);
  
}

function mostrarError() {
  //TODO: hacer esta funcion lel
  console.log("error")
}

function mostrarAcierto() {
    //TODO: hacer esta funcion lel
    console.log("acierto")
}