<html>
    <body>
        <h1>Hola {{ $datosMail['nombre'] }}</h1>
        <a href="localhost:8000/verificacion/{{ $datosMail['confirm_token'] }}">Confirma tu cuenta</a>
    </body>
</html>
