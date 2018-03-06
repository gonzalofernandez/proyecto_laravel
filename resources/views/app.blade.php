<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SnowShop</title>

        <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('/css/styles.css') }}" rel="stylesheet">

        <!-- Fonts -->
        <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
                <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
                <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="container">
            <header>
                <figure>
                    <img class="img-rounded" src="{{ asset('img/inicio/fototitulo.png') }}" alt="imagen de inicio">
                </figure>
            </header>
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle Navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        @if (Auth::check())
                        <a class="navbar-brand" href="{{ route('users.show', Auth::user()) }}">
                            @else
                            <a class="navbar-brand" href="/">
                                @endif
                                <img class="img logotienda" src="{{ asset('img/iconos/navbrand.png') }}" alt="logo de la tienda">
                            </a>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            @if (Auth::check())
                            <li class="centrado_vertical">
                                Hola
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ Auth::user()->nombre }}
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a href="{{ route('users.edit', [Auth::user()]) }}">Perfil</a>
                                    {!! Form::open(['url' => 'logout', 'method' => 'POST', 'class' => 'form-inline', 'role' => 'button']) !!}
                                    {!! Form::submit('Cerrar sesión', ['class'=>'btn']) !!}
                                    {!! Form::close() !!}
                                </div>
                            </li>
                            @else
                            <li>
                                <a href="/login">Acceder</a>
                            </li>
                            <li>
                                <a href="/register">Registro</a>
                            </li>
                            @endif
                            <li class="centrado_vertical">
                                <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Categorias
                                </button>
                                <div class="dropdown-menu">
                                    @foreach ($categorias as $categoria)
                                    <a href="{{ route('categorias.show', $categoria->slug) }}">{{ $categoria->nombre }}</a><br>
                                    @endforeach
                                </div>
                            </li>
                        </ul>
                        {!! Form::open(['url' => 'buscar', 'method' => 'GET', 'class' => 'form-inline navbar navbar-light bg-light pull-right buscador', 'role' => 'search']) !!}
                        Buscar en:
                        <select name="filtro-busqueda">
                            <option value="">Todas</option>
                            @foreach ($categorias as $categoria)
                            <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                            @endforeach
                        </select>
                        <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search" name="busqueda" required="required">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                        {!! Form::close() !!}
                    </div>
                </div>
            </nav>
            <main class="col-lg-10 contenido text-center">
                @if (Session::has('message'))
                <div class="flash alert-info">
                    <p>{{ Session::get('message') }}</p>
                </div>
                @endif
                @if ($errors->any())
                <div class='flash alert-danger'>
                    @foreach ( $errors->all() as $error )
                    <p>{{ $error }}</p>
                    @endforeach
                </div>
                @endif
                @yield('content')
            </main>
            <aside class="col-lg-2 pull-right fondo img-rounded">
                <div class="text-center">
                    <h3 class="text-uppercase gris">categorias</h3>
                    @foreach ($categorias as $categoria)
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle text-uppercase" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ $categoria->nombre }}
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            @foreach ($categoria->productos as $producto)
                            <li>
                                <a class="dropdown-item" href="{{ route('categorias.productos.show', [$categoria->slug, $producto->slug]) }}">
                                    {{ $producto->nombre }}
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    @endforeach
                </div>
            </aside>
            <footer>
                <section id="contacto" class="col-lg-4">
                    <h2 class="azul text-uppercase">contacto</h2>
                    <address>
                        <p>999-999-999</p>
                        <p>snowshop@snowshop.com</p>
                        <p class="mayuscula">calle Laguna nº12 Madrid 28000</p>
                    </address>
                </section>
                <section id="social" class="col-lg-4">
                    <h2 class="azul text-uppercase">síguenos</h2>
                    <div>
                        <a href="//twitter.com"><img class="redsocial" src="{{ asset('img/iconos/twitter.png') }}" alt="logo de twitter"></a>
                    </div>
                    <div>
                        <a href="//facebook.com"><img class="redsocial" src="{{ asset('img/iconos/facebook.png') }}" alt="logo de facebook"></a>
                    </div>
                    <div>
                        <a href="//plus.google.com"><img class="redsocial" src="{{ asset('img/iconos/google+.png') }}" alt="logo de google+"></a>
                    </div>
                    <div>
                        <a href="//whatsapp.com"><img class="redsocial" src="{{ asset('img/iconos/whatsapp.png') }}" alt="logo de whatsapp"></a>
                    </div>
                </section>
                <!--<section id="geolocalizacion">
                    <h2 class="azul text-uppercase">dónde estamos</h2>
                    <figure id="geo"></figure>
                </section>-->
                <section id="legal" class="col-lg-4">
                    <h2 class="azul text-uppercase">aviso legal</h2>
                    <ul>
                        <li>
                            <a class="links" href="/privacidad">Privacidad del sitio</a>
                        </li>
                        <li>
                            <a class="links" href="/condicionesuso">Condiciones de uso</a>
                        </li>
                        <li>
                            <a class="links" href="/condicionesventa">Condiciones de venta</a>
                        </li>
                        <li>
                            <a class="links" href="/derechos">Información de derechos de uso de los contenidos del sitio web</a>
                        </li>
                    </ul>
                </section>
                <p class="text-uppercase aclarado" id="copyright">2018 - interface design</p>    
            </footer>
            <!-- Scripts -->
            <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
            <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
        </div>
    </body>
</html>
