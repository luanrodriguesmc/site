<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.png">

    <title>Mconsult</title>

    <link href="{!! asset('assets/css/bootstrap.min.css') !!}" rel="stylesheet">
    <link href="{!! asset('assets/css/style.css') !!}" rel="stylesheet">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

</head>

<body>

<div class="container" id="intro">
    <div class="navbar-wrapper">
        <nav id="menu-mconsult" class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><img src="assets/img/logo.png" class="logo-mc"></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="">Inicio</a></li>
                        <li><a href="">Sobre</a></li>
                        <li><a href="">Clientes</a></li>
                        <li><a href="">Contato</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>


<!-- Carousel
================================================== -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        @for($i = 0; $i < count($slides); $i++)
            @if($i == 0)
                <li data-target="#myCarousel" data-slide-to="{!! $i !!}" class="active"></li>
            @else
                <li data-target="#myCarousel" data-slide-to="{!! $i !!}"></li>
            @endif
        @endfor
    </ol>
    <div class="carousel-inner" role="listbox" >
        @for($i = 0; $i < count($slides); $i++)
            @if($i == 0)
                <div class="item active">
            @else
                <div class="item">
            @endif
                <img class="first-slide" src="{!! asset('assets/img/'.$slides[$i]->imgUrl) !!}" alt="{!! $slides[$i]->titulo !!}">
                <div class="container" >
                    <div class="carousel-caption">
                        <h1>{!! $slides[$i]->titulo !!}</h1>
                        <p>{!! $slides[$i]->descricao !!}</p>
                        @if($slides[$i]->botao == 'S')
                            <p><a class="btn btn-lg btn-primary" href="{!! $slides[$i]->botaoUrl !!}" role="button">{!! $slides[$i]->botaoTexto !!}</a></p>
                        @endif
                    </div>
                </div>
            </div>
        @endfor
    </div>
</div><!-- /.carousel -->


<div class="container marketing">
    <!-- Three columns of text below the carousel -->
    <div class="row">
        @foreach($noticias as $noticia)
            <div class="col-lg-4">
                <div class="box-noticia">
                    <i class="icon big rounded color1  fa {!! $noticia->icone !!}"></i>
                    <h2>{!! $noticia->indexTitulo !!}</h2>
                    <p>{!! $noticia->indexDescricao !!}</p>
                    @if($noticia->botao == 'S')
                        <p><a class="btn btn-default" href="noticia/{!! $noticia->slug !!}" role="button">Ler Mais  &raquo;</a></p>
                    @endif
                </div>
            </div><!-- /.col-lg-4 -->
        @endforeach
    </div><!-- /.row -->


</div><!-- /.container -->

<div class="container-fluid clientes">
    <div class="container">
        <div class="text-center">
            <h3>CLIENTES</h3>
            <ul class="list-inline">
                @foreach($clientes as $cliente)
                    <li><img src="{!! asset('assets/img/'.$cliente->imgUrl) !!}" alt="Dohler"></li>
                @endforeach
            </ul>
        </div>
    </div>
</div>

<div class="container-fluid contato">
    <div class="container">
        <div class="text-center">
            <h3>CONTATO</h3>

            <form class="form-contato">
                <div class="col-md-6 col-md-offset-3">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nome" class="sr-only">Nome</label>
                            <input type="nome" class="form-control" id="nome" name="nome" placeholder="Nome">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email" class="sr-only">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="msg" class="sr-only">Mensagem</label>
                            <textarea class="form-control" id="msg" name="msg" placeholder="Sua mensagem..."></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-default btn-info btn-lg">Enviar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div id="map-canvas"></div>

<!-- FOOTER -->
<footer>
    <div class="container">
        <p>
        <address>
            Pátio Dom Luís &middot; Av. Dom Luís, 1200 &middot; Sala 2104 &middot; Aldeota<br />Fortaleza-CE<br/>
            <abbr title="Telefone"><span class="glyphicon glyphicon-earphone"></span></abbr> (85) 3044-4978<br>
            <abbr title="Email"><span class="glyphicon glyphicon-envelope"></span></abbr> <a href="mailto:#">contato@mconsult.com.br</a><br>
        </address></p>
        <p>&copy; 2015 Mconsult.</p>
        <p class="social-icons">
            <a href="#"><i class="fa fa-instagram"></i></a>
            <a href="#"><i class="fa fa-facebook"></i></a>
        </p>
    </div>
</footer>

<script src="{!! asset('assets/js/jquery-1.11.2.min.js') !!}"></script>
<script src="{!! asset('assets/js/bootstrap.min.js') !!}"></script>
<script src="https://maps.googleapis.com/maps/api/js"></script>

<script>

    function initialize() {
        var mapCanvas = document.getElementById('map-canvas');
        var mapOptions = {
            center: new google.maps.LatLng(-3.735878, -38.490055),
            zoom: 15,
            scrollwheel: false,
            title:"Praça da Cidade",
            mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(mapCanvas, mapOptions)
        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(-3.735878, -38.490055),
            map: map
        });
    }
    google.maps.event.addDomListener(window, 'load', initialize);
</script>
</body>
</html>