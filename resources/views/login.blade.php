<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @include('partial.nav')

    <h1>login</h1>
    <pre>{{ Auth::user() }}</pre>

    <form action="" method="POST">
        @csrf
        <input name="email" type="email" placeholder="correo electronico...">
        <input name="password" type="password" placeholder="contraseña...">
        <button type="submit">Login</button>
    </form>

</body>
</html>