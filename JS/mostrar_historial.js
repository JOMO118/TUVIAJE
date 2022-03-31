function mostrar_historial() {

    $.ajax({
        type: "GET",
        url: "./historial.php",
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
                                ${dato.email}
                                </p>
                                <form action="acciones/subir_estrella.php" method="POST">
                                    <p class="clasificacion">
                                    <input id="radio1" type="radio" name="estrellas" value="5">
        <label for="radio1">★</label>
        <input id="radio2" type="radio" name="estrellas" value="4">
        <label for="radio2">★</label>
        <input id="radio3" type="radio" name="estrellas" value="3">
        <label for="radio3">★</label>
        <input id="radio4" type="radio" name="estrellas" value="2">
        <label for="radio4">★</label>
        <input id="radio5" type="radio" name="estrellas" value="1">
        <label for="radio5">★</label>
                                    <input  type="hidden" name="id_guia" value="${dato.Id}">
                                    </p>
                                    <br>
                                    <button type="submit" name="SubirCalificacion" class="btn btn-primary">Enviar</button>
                                    
                                </form>
                                    

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
           
        `;
    });
    
    document.getElementById('contenido-playas').innerHTML= "";
    document.getElementById('contenido-guia').innerHTML= template1;


        }
      });
}