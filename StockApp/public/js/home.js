$(document).ready(function(){
  $("#btnProductos").hide();
  $("#btnEntradas").hide();
  $("#btnInventario").click(function(){
    $("#btnProductos").toggle();
    $("#btnEntradas").toggle();
  });
});
