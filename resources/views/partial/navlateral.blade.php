<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
<style>
    @media (max-width: 576px) {
        .menu-list {
            background-color: #343a40;
            display: -webkit-box;
            min-height: 0vh !important;
            margin-top: 0px !important;
            padding: 0vh !important;
        }

        .menu {
            display: none !important;
        }

        .main-content {
            margin-top: 60px;
            /* Ajusta este valor según sea necesario */
        }
    }

    .menu-list {
        background-color: #343a40;
        padding: 0px;
    }
</style>


<div class="col-auto col-sm-2 col-md-3 col-lg-3 col-xl-2 bg-dark min-vh-100 menu-list">
    <div class="col-auto col-sm-2 col-md-3 col-lg-3 col-xl-2 bg-dark p-2 fixed-top">
        <a href="" class="d-flex justify-content-center text-decoration menu">
            <span class="fs-4 d-md-inline">Menu</span>
        </a>
        <ul class="nav nav-pills flex-column mt-4 menu-list align-items-md-start align-items-sm-center ">
            <li class="nav-item py-2 py-sm-0">
                <a href="/dashboard" class="nav-link">
                    <i class="fs-6 fa fa-gauge"></i><span class="fs-5 ms-3 d-none d-sm-none d-md-inline">DashBoard</span>
                </a>
            </li>
            
            @if(Auth::user()->id_rol == 1)
              
            <li class="nav-item py-2 py-sm-0">
                <a href="{{ route('usuario.index') }}" class="nav-link ">
                    <i class="fs-6 fa fa-users"></i><span class="fs-5 ms-3 d-none d-sm-none d-md-inline">Usuarios</span>
                </a>
            </li>

            @endif

            

            <li class="nav-item py-2 py-sm-0">
                <a href="{{ route('evento.listar') }}" class="nav-link ">
                    <i class="fs-6 fa-solid fa-calendar-day"></i><span class="fs-5 ms-3 d-none d-sm-none d-md-inline">Eventos</span>
                </a>
            </li>

            @if(Auth::user()->id_rol == 1)
                <li class="nav-item py-2 py-sm-0">
                    <a href="{{ route('normativa.listar') }}" class="nav-link ">
                        <i class="fs-6 fa fa-table-list"></i><span class="fs-5 ms-3 d-none d-sm-none d-md-inline ">Normativa</span>
                    </a>
                </li>
                <li class="nav-item py-2 py-sm-0">
                    <a href="{{ route('centro_ayuda.index') }}" class="nav-link ">
                        <i class="bi bi-bag-heart-fill"></i><span class="fs-5 ms-3 d-none d-sm-none d-md-inline">Centros de ayuda</span>
                    </a>
                </li>   
            @endif    

            

            @if(Auth::user()->id_rol == 1)
                 
            @endif

            <li class="nav-item py-2 py-sm-0">
                <a href="{{ route('denuncia.listar') }}" class="nav-link ">
                    <i class="fs-6 bi bi-shield-lock-fill"></i><span class="fs-5 ms-3 d-none d-sm-none d-md-inline">Denuncias</span>
                </a>
            </li>

            <li class="nav-item py-2 py-sm-0">
                <a href="{{ route('articulo.listar') }}" class="nav-link ">
                    <i class="bi bi-newspaper"></i><span class="fs-5 ms-3 d-none d-sm-none d-md-inline">Articulos</span>
                </a>
            </li>

            <li class="nav-item py-2 py-sm-0">
                <a href="{{ route('questions.listar') }}" class="nav-link ">
                    <i class="fs-6 fa fa-clipboard"></i><span class="fs-5 ms-3 d-none d-sm-none d-md-inline">Test de violencia</span>
                </a>
            </li>

            <li class="nav-item py-2 py-sm-0">
                <a href="{{ route('alerta.index') }}" class="nav-link">
                    <i class="bi bi-exclamation-triangle-fill"></i><span class="fs-5 ms-3 d-none d-sm-none d-md-inline">Alertas</span>
                </a>
            </li>
        </ul>
    </div>
    <div class="dropdown open fixed-bottom">
        <button class="btn border-none btn-secondary dropdown-toggle" type="button" id="triggerId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-user"></i><span class="ms-2 d-none d-md-inline">{{ Auth::user()->email }}</span>
        </button>
        <div class="dropdown-menu" aria-labelledby="triggerId">
        <a href="/" class="dropdown-item">Inicio</a>
            <form action="{{ route('login.logout') }}" method="POST">
                @csrf
                @method('POST')
                <button class="dropdown-item" type="submit">Salir</button>
            </form>
        </div>
    </div>
</div>