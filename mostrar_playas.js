function mostrar_playas(Id_playa) {



    $.ajax({
        type: "GET",
        url: "Datos_playa.php?Sitio="+Id_playa,
        success: function (response) {
        var resultado = JSON.parse(response);
        resultado.forEach((dato) => {


            template =        `

            <div class="row g-0">
            <div class="col-md-6">
                <img src="${dato.Imagen}" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">
                        ${dato.Nombre}
                    </h5>
                    <p class="card-text" style="text-align:justify;">
                    ${dato.Descripcion}
                    </p>
                </div>
            </div>
        </div>

        `;
    });
            document.getElementById('contenido-playas').innerHTML= template;

        }
      });
}