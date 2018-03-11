<html>
    <body>
        <h1>Hola {{ $datosMail['nombre'] }}</h1>
        Pulse en el siguiente enlace para completar el proceso de registro.
        <a href="{{ url('verificacion', $datosMail['confirm_token']) }}">Confirmar registro</a>
    </body>
</html>
