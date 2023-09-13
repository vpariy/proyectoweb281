<a href="/" class="btn btn-info">Inicio</a>

@auth
    <a href="dashboard" class="btn btn-info">Dashboard</a>

    <form style="display: inline" action="logout" method="POST">
        @csrf
        <a href="#" onclick="this.closest('form').submit()" class="btn btn-info">Logout</a>
    </form>
    

@else

<a href="login">Login</a>

@endauth