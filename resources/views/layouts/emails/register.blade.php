<html>
    <body>
        <h1>Bienvenido {{$data['name']}}</h1>
        <a href="{{url()}}/verificacion/{{$data['confirm_token']}}">Confirma tu cuenta</a>
    </body>
</html>
