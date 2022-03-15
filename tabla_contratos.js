function mostrar_tabla() {
    
    $.ajax({
        url: "datos_contrato.php",
        success: function (response) {
          document.getElementById('contenido-playas').innerHTML= "";
         $('#contenido_tabla').html(response);
        }
    });
}

