<nav class="navbar navbar-expand-lg fixed-top navbar-light" style="background-color: #fff;">
    <div class="container justify-content-between d-flex">

        <div class="col-2">
            <a class="navbar-brand " href="{{ route('pagina.principal') }}"><img src="https://tse1.mm.bing.net/th?id=OIP.IWCjQ0V8j0jploUPqhX6ZAHaDQ&pid=Api&P=0&w=300&h=300" alt="Logo" style="width: 250px; height: 85px;"></a>
        </div>

        <div class="col-10">
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    
                    <li class="nav-item">
                        <a class="nav-link btn btn-outline-primary" href="{{ route('pagina.articulo') }}">Articulos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-outline-warning" href="{{ route('pagina.centrosayuda') }}">Centros de Ayuda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-outline-secondary" href="{{ route('pagina.normativa') }}">Normativas</span></a> 
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-outline-danger" href="{{ route('denuncia.crear') }}">Panel de denuncias</a>
                    </li>
                    
                    <li>
                        <div class="dropdown">
                            <button class="nav-link btn btn-outline-info dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Test violencia de genero
                            </button>

                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('pagina.testviolencia') }}">Test 1</a></li>
                                <li><a class="dropdown-item" href="{{ route('test.test2') }}">Test 2</a></li>
                            
                            </ul>
                        </div>
                    </li>

                    <!-- <li class="nav-item">
                        <a class="nav-link btn btn-outline-info" href="{{ route('pagina.testviolencia') }}">Test violencia de genero</a>
                    </li> -->

                    <li>
                    <button type="button" class="btn btn-danger" id="obtener-ubicacion">ALERTA</button>
                    </li>
                    @auth
                    <div class="dropdown mx-2">
                        <button class="btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-user"></i><span class="fs-5 ms-3 d-none d-sm-none d-md-inline">{{ Auth::user()->nombres }}</span>
                        </button>
                        <ul class="dropdown-menu">
                        
                        @if((Auth::user()->id_rol == 1) || (Auth::user()->id_rol == 2))
                            <li><a class="dropdown-item" href="{{ route('dashboard') }}">Administrar</a></li>
                        @endif
                        
                            
                            <li>
                                <form action="{{ route('login.logout') }}" method="POST">
                                    @csrf
                                    @method('POST')
                                    <button class="dropdown-item" type="submit">Cerrar Session</button>
                                </form>
                            </li>
                            
                        </ul>
                    </div>

                    @else
                    <li class="nav-item mx-2">
                        <a href="{{ route('login.ingreso') }}" class="btn btn-outline-success">Iniciar Sesion</a>
                    </li>
                    @endauth

                </ul>
            </div>

            

        </div>

    </div>
</nav>
<br>
<br>
<br>
<br>