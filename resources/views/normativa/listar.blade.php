<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <!-- Link de los estilos -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../style/style.css">

</head>
<body>
    @include('partial.nav')
    

    


    <div class="container-fluid ">
        <div class="row flex-nowrap ">
            @include('partial.navlateral')
            
            <div class="card-body">
            <div class="accordion" id="normativasAccordion">

                <!-- Normativa 1 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="normativa1Heading">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#normativa1" aria-expanded="true" aria-controls="normativa1">
                            Ley contra el maltrato
                        </button>
                    </h2>
                    <div id="normativa1" class="accordion-collapse collapse show" aria-labelledby="normativa1Heading" data-bs-parent="#normativasAccordion">
                        <div class="accordion-body">
                        La "Ley Integral Contra la Violencia hacia la Mujer" de Bolivia tiene como objetivo prevenir y sancionar todas las formas de violencia contra las mujeres. Esta ley contempla medidas de protección, sanciones para los agresores y promueve la equidad de género.
                        </div>
                    </div>
                </div>

                <!-- Normativa 2 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="normativa2Heading">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#normativa2" aria-expanded="false" aria-controls="normativa2">
                            Deber de denuncia ciudadana
                        </button>
                    </h2>
                    <div id="normativa2" class="accordion-collapse collapse" aria-labelledby="normativa2Heading" data-bs-parent="#normativasAccordion">
                        <div class="accordion-body">
                        La "Ley de Participación y Control Ciudadano" establece el deber de los ciudadanos de denunciar cualquier acto ilícito que atente contra la legalidad. Esta normativa busca fortalecer la participación ciudadana en la prevención y control de la corrupción y otros delitos.
                        </div>
                    </div>
                </div>

                <!-- Normativa 3 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="normativa3Heading">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#normativa3" aria-expanded="false" aria-controls="normativa3">
                            Ley de protección a víctimas de delitos
                        </button>
                    </h2>
                    <div id="normativa3" class="accordion-collapse collapse" aria-labelledby="normativa3Heading" data-bs-parent="#normativasAccordion">
                        <div class="accordion-body">
                        La "Ley de Protección a Víctimas y Testigos" tiene como objetivo garantizar los derechos y la protección integral de las víctimas de delitos. Proporciona asistencia legal, atención médica y apoyo psicológico, así como medidas de seguridad para asegurar el bienestar de las personas afectadas.
                        </div>
                    </div>
                </div>

                <!-- Normativa 4 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="normativa4Heading">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#normativa4" aria-expanded="false" aria-controls="normativa4">
                        Ley de Protección a Víctimas de Violencia Doméstica
                        </button>
                    </h2>
                    <div id="normativa4" class="accordion-collapse collapse" aria-labelledby="normativa4Heading" data-bs-parent="#normativasAccordion">
                        <div class="accordion-body">
                        Esta ley busca garantizar la seguridad y el bienestar de las víctimas de violencia doméstica. Establece medidas de protección, asistencia legal y recursos para las personas afectadas.                        </div>
                    </div>
                </div>

                <!-- Normativa 5 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="normativa5Heading">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#normativa5" aria-expanded="false" aria-controls="normativa5">
                        Ley contra el Acoso Laboral
                        </button>
                    </h2>
                    <div id="normativa5" class="accordion-collapse collapse" aria-labelledby="normativa5Heading" data-bs-parent="#normativasAccordion">
                        <div class="accordion-body">
                        Orientada a prevenir y sancionar el acoso laboral en el ámbito profesional. Proporciona mecanismos para que los trabajadores denuncien situaciones de acoso y establece medidas correctivas.                    </div>
                    </div>
                </div>

                <!-- Normativa 6 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="normativa6Heading">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#normativa6" aria-expanded="false" aria-controls="normativa6">
                        Ley de Denunciantes de Corrupción
                        </button>
                    </h2>
                    <div id="normativa6" class="accordion-collapse collapse" aria-labelledby="normativa6Heading" data-bs-parent="#normativasAccordion">
                        <div class="accordion-body">
                        Diseñada para proteger a aquellos que denuncian actos de corrupción. Garantiza la confidencialidad de los denunciantes y prohíbe represalias contra ellos.                </div>
                    </div>
                </div>

                <!-- Normativa 7 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="normativa7Heading">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#normativa7" aria-expanded="false" aria-controls="normativa7">
                        Ley de Derechos Humanos y Libertades Civiles
                        </button>
                    </h2>
                    <div id="normativa7" class="accordion-collapse collapse" aria-labelledby="normativa7Heading" data-bs-parent="#normativasAccordion">
                        <div class="accordion-body">
                        Establece los derechos fundamentales de los ciudadanos, incluyendo el derecho a denunciar violaciones a los derechos humanos. Contempla procedimientos para la presentación y seguimiento de denuncias.                </div>
                    </div>
                </div>

                <!-- Normativa 8 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="normativa8Heading">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#normativa8" aria-expanded="false" aria-controls="normativa8">
                        Ley de Protección a Testigos
                        </button>
                    </h2>
                    <div id="normativa8" class="accordion-collapse collapse" aria-labelledby="normativa8Heading" data-bs-parent="#normativasAccordion">
                        <div class="accordion-body">
                        Enfocada en proteger a los testigos que cooperan con investigaciones criminales. Busca garantizar su seguridad y ofrecer incentivos para que proporcionen información clave.                </div>
                    </div>
                </div>

                <!-- Normativa 9 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="normativa9Heading">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#normativa9" aria-expanded="false" aria-controls="normativa9">
                        Ley de Acceso a la Información Pública
                        </button>
                    </h2>
                    <div id="normativa9" class="accordion-collapse collapse" aria-labelledby="normativa9Heading" data-bs-parent="#normativasAccordion">
                        <div class="accordion-body">
                        Proporciona un marco legal para el acceso a la información pública. Facilita la transparencia y permite a los ciudadanos denunciar la negativa injustificada de acceso a la información.                </div>
                    </div>
                </div>

                <!-- Normativa 10 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="normativa10Heading">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#normativa10" aria-expanded="false" aria-controls="normativa10">
                        Ley contra la Discriminación
                        </button>
                    </h2>
                    <div id="normativa10" class="accordion-collapse collapse" aria-labelledby="normativa10Heading" data-bs-parent="#normativasAccordion">
                        <div class="accordion-body">
                        Busca prevenir y sancionar actos discriminatorios en cualquier ámbito. Establece procedimientos para la presentación de denuncias relacionadas con discriminación por género, raza, religión, entre otros.                
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>