<nav class="navbar navbar-expand-lg fixed-top navbar-light" style="background-color: #fff;">
    <div class="container justify-content-between d-flex">

        <div class="col-2">
            <a class="navbar-brand " href="{{ route('pagina.principal') }}"><img src="https://tse1.mm.bing.net/th?id=OIP.IWCjQ0V8j0jploUPqhX6ZAHaDQ&pid=Api&P=0&w=300&h=300" alt="Logo" style="width: 250px; height: 85px;"></a>
        </div>

        <div class="col-10">
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="login/ingreso" class="btn btn-outline-success">Ingreso</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-outline-secondary" href="{{ route('pagina.centrosayuda') }}">Centros de Ayuda</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link btn btn-outline-secondary" href="{{ route('pagina.normativa') }}">Normativas</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-outline-danger" href="#">Panel de denuncias</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-outline-info" href="{{ route('pagina.testviolencia') }}">Test violencia de genero</a>
                    </li>
                   
                </ul>
            </div>
        </div>

    </div>
</nav>