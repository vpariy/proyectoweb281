@extends('template.nologeado')

@section('contenido')



<div class="container-fluid w-75">
    <div class="row">
        <div class=" ">
            <div id="carouselExample" class="carousel slide w-100 " data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://www.derechoenzapatillas.com/wp-content/uploads/2019/08/FireShot-Capture-003-Ministerio-Público-Procuración-General-de-la-Suprema-Corte-de-Justi_-www.mpba_.gov_.ar_-750x374.png" class="d-block w-100" alt="Imagen 1">
                </div>

                <div class="carousel-item">
                    <img src="https://www.gob.mx/cms/uploads/article/main_image/78972/PORTADA_BLOG_denuncia.jpg" class="d-block w-100" alt="Imagen 2">
                </div>

                <div class="carousel-item">
                    <img src="https://www.sunedu.gob.pe/wp-content/uploads/2020/06/atencion-de-denuncias-enlace-1.jpg" class="d-block w-100" alt="Imagen 3">
                </div>

                <div class="carousel-item">
                    <img src="https://img.freepik.com/vector-gratis/gerentes-diminutos-dibujos-animados-altavoz-gigante-computadora-portatil-ilustracion-plana_74855-16816.jpg" class="d-block w-100" alt="Imagen 4">
                </div>
            </div>
            <!-- Controles del carrusel -->
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Siguiente</span>
            </button>
            </div>
        </div>
    </div>
</div>


<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="text-center">
                <div class="card-deck">
                @foreach($eventos as $evento)
                    <div class="card">
                        <img class="card-img-top" src="/storage/{{ $evento->archivo->nombre ?? '' }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{ $evento->nombre }}</h5>
                            
                            <p class="card-text"><small class="text-muted">Dia del evento: {{ $evento->f_evento }}</small></p>
                            <p class="card-text"><small class="text-muted">Modalidad {{ $evento->tipo }}</small></p>
                            <a href="{{ route('evento.mostrarevento', $evento) }}" class="btn btn-primary">Ver evento</a>                       
                        </div>
                        <div class="card-footer text-body-secondary">
                            
                        </div
                    </div>
                @endforeach

                
                </div>
            </div>
        </div>
    </div>
</div>



<div class="aling">
  



</div>

    <div class="container mt-5 mb-5">
        <div class="card-header text-center mb-3">
            <h1 class="text-center p-3">Articulos</h1>
        </div>

        <table class="table">
            <div class="container">
                <div class="row justify-content-md-center">
                    @if (isset($articulos))
                    @foreach($articulos as $articulo)
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{ asset($articulo->img_art) }}" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $articulo->nombre_art }}</h5>
                                    <p class="card-text">{{ $articulo->desc_art }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @else
                    <p>No hay artículos disponibles.</p>
                    @endif
                </div>
            </div>
        </table>
    </div>

@endsection




