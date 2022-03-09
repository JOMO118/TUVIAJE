function mostrar_guias(Id_playa) {

    $.ajax({
        type: "GET",
        url: "Datos_guias.php?Sitio="+Id_playa,
        success: function (response) {       
        var resultado2 = JSON.parse(response);
        let template1 = "";
        resultado2.forEach((dato) => {


            template1+=        `
            <div>
            <div class="image-flip">
                <div class="mainflip flip-0">
                    <div class="frontside">
                        <div class="card">
                            <div class="card-body text-center">
                                <p><img class=" img-fluid" src=" ${dato.Foto} " card image></p>
                                
                                <h4 class="card-title">
                                ${dato.Nombre}
                                </h4>
                                <p class="card-text">
                                    ${dato.Edad} AÑOS
                                </p> <a href="https://www.fiverr.com/share/qb8D02" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="backside ">
                        <div class="card">
                            <div class="card-body text-center mt-4">

                                <h4 class="card-title">
                                ${dato.Nombre} ${dato.Apellidos}
                                </h4>
                                <p class="card-text">Calificación: </p>
                                <p class="card-text">Celular:
                                ${dato.Celular}
                                </p>
                                <p class="card-text">Email:
                                ${dato.Email}
                                </p>
                                <a href="/Acciones/reservar_contrato.php?Id_guia=${dato.Id}"><button type="button" class="btn btn-primary"> Solicitar reserva</button></a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
           
        `;
    });
            document.getElementById('contenido-guia').innerHTML= template1;

        }
      });
}