<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid justify-content-center">
        <div class="row justify-content-center align-items-center ">
            <div class="col-1">
                <a class="navbar-brand " href="#"><img src="img/descarga_denuncia.png" alt="Logo" style="width: 150px; height: 50px;"></a>
            </div>
            <div class="col-10">
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('pagina.articulo') }}">Panel de articulos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('pagina.principal') }}">Panel de eventos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">¿Denuncia?</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('pagina.centrosayuda') }}">Centros de Ayuda</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('pagina.normativa') }}">Normativas</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">FAQ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Panel de denuncias</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('pagina.testviolencia') }}">Test violencia de genero</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-1">
                <a href="login/ingreso" class="btn btn-success m-0">Ingreso</a>

            </div>

        </div>
    </div>
</nav>