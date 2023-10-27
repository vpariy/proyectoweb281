<a href="/" class="btn dropdown-item">Inicio</a>

@auth
<a href="{{ url('dashboard') }}" class="btn dropdown-item">Dashboard</a>
@else

<a href="login/ingreso">Login</a>

@endauth

