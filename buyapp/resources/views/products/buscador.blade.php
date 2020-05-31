<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<link>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Buscador De Productos</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}"></link>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet"><!--etiqueta para poder hacer uso de los glyphicons en nuestro buscador-->
</head>
<body>
<center><h1>Bienvenido al buscador de productos</h1></center>
<div class="container">
    <form action="/products/buscador" method="get" class="form-horizontal">
        <div class="form-group row">

            <div class="col-md-10">
                <input type="text" name="buscador" id="buscador" class="form-control">
            </div>

            <div class="col-md-2">
                <input type="submit" value="Buscar" class="btn btn-primary btn-block">
            </div>
        </div>
    </form>
    @foreach($products as $p)
        <div class="row">
            <!--el diseño de la pagina en el buscador contiene 3 apartados-->
<!--1 columna de la imagen-->
            <div class="col-md-3"><!--divide la pantalla en 1/4 columna-->
                <img src="https://dxxw2p6dofvfz.cloudfront.net/images/thumbnails/1143/1000/detailed/4/wlNcqqRl0UuGmPYegJqUOw.c-r.jpg?t=1554338624" alt="" height="250">
            </div>
<!--2 columna de nombre, ciudad y pais-->
            <div class="col-md-6"><!--divide la pantalla en 1/2 columna-->
                <h2>{{$p->name}}</h2>
                <h5>{{$p->city}}, {{$p->country}}</h5>
                <h5></h5>
                <p>{{$p->description}}</p>
            </div>
<!--3 columna de la imagen-->
            <div class="col-md-3"><!--divide la pantalla en 1/4 columna-->
                <div class="col-md-12">
                    <h3>${{$p->unit_price}}</h3>
                </div>
<!--Envio gratis-->
                <div class="col-md-12">
                    <span class="glyphicon glyphicon-send" aria-hidden="true"></span>Envio Gratis
                </div>
<!--Si el producto es nuevo nuevo-->
                @if($p->is_new)<!--si el producto es nuevo-->
                <div class="col-md-12">
                    <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>Producto Nuevo<!--se mostrara el mensaje-->
                </div>
                @endif<!--de no ser asi, se omite el mensaje y termina el ciclo-->
<!--Boton agregar a carrito-->
                <div class="col-md-12">
                    <input type="button" class="btn btn-primary btn-block" value="Agregar a carrito">
                </div>

            </div>
        </div>
    @endforeach
</div>
</body>
</html>
