<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bienvenida</title>

    <!-- Link de los estilos -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    
    <!-- Barra de navegación -->
            
    @include('partial.navlogout')
            
    <div class="background-container">
        <h1 class="text-center p-3">TEST DE VIOLENCIA DE GÉNERO</h1>
        <!-- Contenido de la página -->
        <div class="container mt-5 d-flex justify-content-center text-center">
            <div id="pregunta-container" class="border-primary">
                <p id="pregunta"></p>
                <div class="form-check form-check-inline">
                    <div class="form-check m-3">
                        <input class="form-check-input custom-radio" type="radio" name="respuesta" id="opcionSi" value="1">
                        <label class="form-check-label" for="opcionSi">Sí</label>
                    </div>
                    <div class="form-check m-3">
                        <input class="form-check-input custom-radio" type="radio" name="respuesta" id="opcionNo" value="0">
                        <label class="form-check-label" for="opcionNo">No</label>
                    </div>
                </div>
                <button id="siguiente-btn" class="btn btn-primary text-center">Siguiente</button>
            </div>  
        </div>
    </div>
    
    
    
<!-- Modal de Bootstrap -->
<div class="modal fade modal-warning" id="modalUno" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ten cuidado</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Existe la posibilidad que la violencia aumente 
                <p id="resultado1"></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade modal-orange" id="modalDos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Reacciona</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                No te dejes destruir, denuncia y pide ayuda
                <p id="resultado2"></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade modal-red" id="modalTres" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">¡Peligro!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Necesitas ayuda profesional
                <p id="resultado3"></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade modal-green" id="modalCuatro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">¡Enhorabuena!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                No sufres de violencia de genero
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<script>
    var preguntas = {!! json_encode($preguntas) !!}; // Obtén las preguntas desde el controlador
    var preguntaIndex = 0; // Índice de la pregunta actual
    var nivel1=0;
    var nivel2=0;
    var nivel3=0;
    // Función para mostrar la pregunta actual
    function mostrarPregunta() {
        document.getElementById('pregunta').textContent = preguntas[preguntaIndex].pregunta;
        // Desmarcar las casillas de verificación al mostrar una nueva pregunta
        document.getElementById('opcionSi').checked = false;
        document.getElementById('opcionNo').checked = false;
    }

    function siguientePregunta() {
            // Verificar si al menos una opción está marcada
            if (document.getElementById('opcionSi').checked || document.getElementById('opcionNo').checked) {
                if (document.getElementById('opcionSi').checked && preguntaIndex<10) {
                nivel1++;
                } 
                 
                if (document.getElementById('opcionSi').checked && preguntaIndex>=10 && preguntaIndex<20) {
                nivel2++;
                }
                if (document.getElementById('opcionSi').checked && preguntaIndex>=20 && preguntaIndex<30) {
                nivel3++;
                }
                preguntaIndex++;
                if (preguntaIndex < preguntas.length) {
                    mostrarPregunta();
                } else {
                        if(nivel3>0){
                                $('#modalTres').modal('show');
                                var contenidoModal1 = 'Marco "SI" en: <br>' + nivel3 + ' preguntas con un alto riesgo de violencia <br>' + nivel2 + ' preguntas con un riesgo moderado de violencia <br>' + nivel1 + ' preguntas con un bajo riesgo de violencia';
                                document.getElementById('resultado3').innerHTML = contenidoModal1;

                                //document.getElementById('resultado3').textContent = 'Marco "SI" en:\n' + nivel3+' preguntas con un alto riesgo de violencia\n'+ nivel2+' preguntas con un alto riesgo de violencia\n'+ nivel1+' preguntas con un alto riesgo de violencia';
                        }else{
                            if(nivel2>0){
                                $('#modalDos').modal('show');
                                var contenidoModal2 = 'Marco "SI" en: <br>' + nivel2 + ' preguntas con un riesgo moderado de violencia <br>' + nivel1 + ' preguntas con un bajo riesgo de violencia';
                                document.getElementById('resultado2').innerHTML = contenidoModal2;

                            }else{
                                if(nivel1>0){
                                    $('#modalUno').modal('show');
                                    document.getElementById('resultado1').textContent = 'Marco "SI" en: ' + nivel1+' preguntas con un bajo riesgo de violencia';
                                }else{
                                    {$('#modalCuatro').modal('show');}
                                }
                            }
                        }
                    
                }
            } else {
                window.alert('Por favor, marca al menos una opción (Sí o No) antes de pasar a la siguiente pregunta.');
            }
        
        
        }



    // Agregar un event listener al botón "Siguiente"
    document.getElementById('siguiente-btn').addEventListener('click', siguientePregunta);

    // Mostrar la primera pregunta al cargar la página
    mostrarPregunta();
</script>




<style>
.background-container {
    background: url('https://static.vecteezy.com/system/resources/previews/002/397/090/large_2x/people-with-question-marks-illustration-man-and-woman-with-question-thinking-guy-illustration-vector.jpg');
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
    background-color: rgba(255, 255, 255, 0.5); 
    padding: 200px;
}
#pregunta-container {
    background-color: rgba(255, 255, 255, 0.9);
    padding: 34px;
    border-radius: 10px;
    font-size: 21px; 
}
    .custom-radio {
    width: 2rem; /* Personaliza el ancho del radio */
    height: 2rem; /* Personaliza la altura del radio */
    margin-right: 0.5rem;
}
.modal-warning .modal-content {
    background-color: #ecf027; /* Cambia el color de fondo del modal a azul */
    color: #ffffff; /* Cambia el color del texto dentro del modal a blanco */
}

.modal-warning .modal-header {
    background-color: #c5c20e; /* Cambia el color del encabezado del modal a un tono más oscuro de azul */
}

.modal-warning .modal-footer {
    background-color: #c5c20e; /* Cambia el color del pie del modal a un tono más oscuro de azul */
}

.modal-orange .modal-content {
    background-color: #fa9a1c; /* Cambia el color de fondo del modal a azul */
    color: #ffffff; /* Cambia el color del texto dentro del modal a blanco */
}

.modal-orange .modal-header {
    background-color: #b16f0b; /* Cambia el color del encabezado del modal a un tono más oscuro de azul */
}

.modal-orange .modal-footer {
    background-color: #b16f0b; /* Cambia el color del pie del modal a un tono más oscuro de azul */
}

.modal-red .modal-content {
    background-color: #f5631f; /* Cambia el color de fondo del modal a azul */
    color: #ffffff; /* Cambia el color del texto dentro del modal a blanco */
}

.modal-red .modal-header {
    background-color: #c44f0b; /* Cambia el color del encabezado del modal a un tono más oscuro de azul */
}

.modal-red .modal-footer {
    background-color: #c44f0b; /* Cambia el color del pie del modal a un tono más oscuro de azul */
}

.modal-green .modal-content {
    background-color: #05df46; /* Cambia el color de fondo del modal a azul */
    color: #ffffff; /* Cambia el color del texto dentro del modal a blanco */
}

.modal-green .modal-header {
    background-color: #0d802f; /* Cambia el color del encabezado del modal a un tono más oscuro de azul */
}

.modal-green .modal-footer {
    background-color: #0d802f; /* Cambia el color del pie del modal a un tono más oscuro de azul */
}
</style>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>
    $(document).ready(function () {
        // Función para aplicar estilos al #pregunta-container
        function aplicarEstilos(borde, fondo, colorTexto) {
            $("#pregunta-container").removeClass("border-primary border-success border-danger");
            $("#pregunta-container").addClass(borde);
            $("#pregunta-container").css("background-color", fondo);
            $("#pregunta-container").css("color", colorTexto);
        }

        // Inicialmente, establece el estilo por defecto
        aplicarEstilos("border border-primary", "rgba(255, 255, 255, 0.9)", "black");

        // Cuando se selecciona "Sí"
        $("#opcionSi").on("click", function () {
            aplicarEstilos("border border-success", "rgba(0, 255, 0, 0.9)", "black");
        });

        // Cuando se selecciona "No"
        $("#opcionNo").on("click", function () {
            aplicarEstilos("border border-danger", "rgba(255, 0, 0, 0.9)", "white");
        });
        
        $("#siguiente-btn").on("click", function () {
        aplicarEstilos("border border-primary", "rgba(255, 255, 255, 0.9)", "black");
        });
    });
    </script>
<script>
    // Esperar a que el modal se cierre completamente
$('#modalUno').on('hidden.bs.modal', function () {location.reload();});
$('#modalDos').on('hidden.bs.modal', function () {location.reload();});
$('#modalTres').on('hidden.bs.modal', function () {location.reload();});
$('#modalCuatro').on('hidden.bs.modal', function () {location.reload();});
</script>
</body>
</html>

