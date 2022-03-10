 function mostrar_guias(Id_playa) {

    $.ajax({
        type: "GET",
        url: "Datos_guias.php?Sitio="+Id_playa,
        success: function (response) {       
        var resultado2 = JSON.parse(response);
        let template1 = "";
        console.log(resultado2);
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
                               <button type="button" onclick = "mostrarvistaContratarGuia(${Id_playa},'${dato.Id}')" class="btn btn-primary"> Solicitar reserva</button>

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

