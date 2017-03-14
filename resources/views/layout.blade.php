<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="pt-br"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="pt-br"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="pt-br"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="pt-br"> <!--<![endif]-->
<head>
    <meta charset="iso-8859-1">
    <meta http-equiv="X-UA-Compatible" content="IE=5; IE=8; IE=9; IE=10;" >
    <title>Quem Sou</title>

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="icon" href="{{ asset('favicon.png') }}" type="text/css" sizes="16x16">

    <!-- STYLES CSS -->
    <link rel="stylesheet" type="text/css" href="/css/app.css"/>
    <link rel="stylesheet" type="text/css" href="/css/custom.css">
</head>

<body>
<div class="container">
    <nav class="navbar navbar-default">
        <div class="container-fluid">

            <div class="navbar-header">
                <a class="navbar-brand" href="/">Colaboradores</a>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{action('ColaboradorController@lista')}}">Lista</a></li>
                <li><a href="{{action('ColaboradorController@form_novo')}}">Novo</a></li>
            </ul>
        </div>
    </nav>

    @yield('conteudo')

    <footer class="footer">
        <p>&copy; Artemsite - Agência digital</p>
    </footer>
</div>

<!-- Scripts -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>

@yield('footer')
</body>
</html>
