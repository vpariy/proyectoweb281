<div class="bg-dark col-auto col-md-3 col-lg-2 min-vh-100 d-flex flex-column justify-content-between">
    <div class="bg-dark p-2">
        <a href="" class="d-flex text-decoration-none align-items-lg-center text-white">
            <span class="fs-4 d-none d-sm-inline">Menu</span>
        </a>
        <ul class="nav nav-pills flex-column mt-4">
            <li class="nav-item py-2 py-sm-0">
                <a href="/dashboard" class="nav-link text-white">
                    <i class="fs-6 fa fa-gauge"></i><span class="fs-5 ms-3 d-none d-sm-inline">DashBoard</span>
                </a>
            </li>

            <li class="nav-item py-2 py-sm-0">
                <a href="{{ route('usuario.index') }}" class="nav-link text-white ">
                    <i class="fs-6 fa fa-users"></i><span class="fs-5 ms-3 d-none d-sm-inline ">Usuarios</span>
                </a>
            </li>

            <li class="nav-item py-2 py-sm-0">
                <a href="{{ route('evento.listar') }}" class="nav-link text-white ">
                    <i class="fs-6 fa-solid fa-calendar-day"></i><span class="fs-5 ms-3 d-none d-sm-inline ">Eventos</span>
                </a>
            </li>

            <li class="nav-item py-2 py-sm-0">
                <a href="{{ route('normativa.listar') }}" class="nav-link text-white ">
                    <i class="fs-6 fa fa-table-list"></i><span class="fs-5 ms-3 d-none d-sm-inline ">Normativa</span>
                </a>
            </li>
            <li class="nav-item py-2 py-sm-0">
                <a href="{{ route('centro_ayuda.index') }}" class="nav-link text-white ">
                    <i class="fs-6 fa fa-table-list"></i><span class="fs-5 ms-3 d-none d-sm-inline ">Centros de ayuda</span>
                </a>
            </li>
            <li class="nav-item py-2 py-sm-0">
                <a href="" class="nav-link text-white ">
                    <i class="fs-6 fa fa-house"></i><span class="fs-5 ms-3 d-none d-sm-inline ">Home</span>
                </a>
            </li>
            <li class="nav-item py-2 py-sm-0">
                <a href="{{ route('articulo.listar') }}" class="nav-link text-white ">
                    <i class="fs-6 fa fa-table-list"></i><span class="fs-5 ms-3 d-none d-sm-inline ">Articles</span>
                </a>
            </li>

            <li class="nav-item py-2 py-sm-0">
                <a href="{{ route('questions.listar') }}" class="nav-link text-white ">
                    <i class="fs-6 fa fa-clipboard"></i><span class="fs-5 ms-3 d-none d-sm-inline ">Test de violencia</span>
                </a>
            </li>

            <li class="nav-item py-2 py-sm-0">
                <a href="{{ route('alerta.index') }}" class="nav-link text-white ">
                    <i class="fs-6 fa fa-clipboard"></i><span class="fs-5 ms-3 d-none d-sm-inline ">Alertas</span>
                </a>
            </li>
        </ul>
    </div>
    <div class="dropdown open p-3">
        <button class="btn border-none btn-secondary dropdown-toggle text-white" type="button" id="triggerId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-user"></i><span class="ms-2 d-none d-md-inline">{{ Auth::user()->email }}</span>
        </button>
        <div class="dropdown-menu" aria-labelledby="triggerId">
            <form action="{{ route('login.logout') }}" method="POST">
                @csrf
                @method('POST')
                <button class="dropdown-item" type="submit">Salir</button>
            </form>

            <button class="dropdown-item disabled" href="#">Disabled action</button>
        </div>
    </div>
</div>