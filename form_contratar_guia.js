function mostrarvistaContratarGuia(Id_playa,id_guia) {
    $.ajax({
        type: "GET",
        url: "info_guia.php?Id="+id_guia,
        success: function (response) {       
            var resultado2 = JSON.parse(response);
            let template1 = "";
            console.log(resultado2);
            resultado2.forEach((dato) => {
    
                template1+=        `
            <div class="mt-5 pt-4">
                <section class="row">
                    <!-- GUIA -->
                    <div class="col-3">
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
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-9 py-4 px-5 d-flex flex-column  align-items-end ">
                        <h1 class="fw-bold text-center w-100 mb-5"> Contratar Guia</h1>
                        <form action="Acciones/reservar_contrato.php" method="post" >
                            <p class="fw-bold mb-3">Seleccionar el horario para contratar a guian</p>
                            <div class="row mt-2">
                                <div class="input-group input-group-sm mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">Fecha</span>
                                    <input type="date" class="form-control" name="fecha" required aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                </div>
                                <div class="input-group input-group-sm mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">Hora</span>
                                    <input type="time" class="form-control" aria-label="Sizing example  input" name="hora"  required aria-describedby="inputGroup-sizing-sm">
                                </div>
                                <input type ="hidden" value="${id_guia}" name ="id_guia" >
                            </div>
                            <div class="">
                                <button class="btn btn-primary" type="submit">Contratar guia</button>
                                <button class="btn btn-danger"> Cancelar</button>
                            </div>
                        </form>
                    </div>
                </section> 
       
    </div>

               
            `;
        });
                document.getElementById('contenido-playas').innerHTML= template1;
                document.getElementById('contenido-guia').innerHTML= "";
            }   
    });
}

