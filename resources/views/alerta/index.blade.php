<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Alertas</title>
       <!-- Estilos -->
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
       <link rel="stylesheet" href="../style/style.css">
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
   
    <!-- Incluye las bibliotecas de Leaflet y OpenStreetMap -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <style>
        #map {
            height: 400px;
            width: 100%;
        }
    </style>
</head>
<body>

    @include('partial.nav')

  <div class="container-fluid ">
    <div class="row flex-nowrap ">
        
      @include('partial.navlateral')
    
      <!-- Contenido -->
      <div class="p-1 col" >
        <h1 class="text-center p-3">Lista de Alertas</h1>
    

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Latitud</th>
                <th>Longitud</th>
                <th>Fecha</th>
                <th>Ver Ubicación</th>
            </tr>
        </thead>
        <tbody>
            @foreach($alertas as $alerta)
                <tr>
                    <td>{{ $alerta->id }}</td>
                    <td>{{ $alerta->usuario->nombres }}</td>
                    <td>{{ $alerta->usuario->ap_paterno }}</td>
                    <td>{{ $alerta->usuario->ap_materno }}</td>
                    <td>{{ $alerta->ubicacion->latitud }}</td>
                    <td>{{ $alerta->ubicacion->longitud }}</td>
                    <td>{{ $alerta->created_at }}</td>
                    <td>
                        <!-- Botón para ver la ubicación en el mapa -->
                        <button onclick="updateMap({{ $alerta->ubicacion->latitud }}, {{ $alerta->ubicacion->longitud }})">Ver en Mapa</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

        <!-- Contenedor para el mapa -->
         <div id="map"></div>

      </div>
</div>
</div>



<script>
    // Función para inicializar el mapa con Leaflet y OpenStreetMap
   /* function initMap(latitud, longitud) {
        var map = L.map('map').setView([latitud, longitud], 15);
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map);
        L.marker([latitud, longitud]).addTo(map);
    }*/
    var map;

// Función para inicializar el mapa con Leaflet y OpenStreetMap
function initMap(latitud, longitud) {
    map = L.map('map').setView([latitud, longitud], 15);
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map);
    marker = L.marker([latitud, longitud]).addTo(map);
}

// Función para actualizar el mapa con nuevas coordenadas
function updateMap(latitud, longitud) {
    if (map) {
        // Eliminar el marcador anterior si existe
        if (marker) {
            map.removeLayer(marker);
        }

        // Centrar el mapa en las nuevas coordenadas y agregar el marcador
        map.setView([latitud, longitud], 15);
        marker = L.marker([latitud, longitud]).addTo(map);
    } else {
        // Si el mapa no está inicializado, inicializarlo con las coordenadas
        initMap(latitud, longitud);
    }
}

</script>
</body>
</html>
