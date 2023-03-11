<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale= class=btn btn-sm btn warning.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{url ('css/stile.css')}}">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar fixed-top navbar-expand-lg navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="#">INVENTARIO</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('index') }}">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('Products') }}">Productos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('Promociones') }}">Promociones</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('ubicacion') }}">Ubicaion</a>
      </li>
      </li><li class="nav-item">
        <a class="nav-link" href="{{ route('contact') }}">Contacto</a>
      </li>
    </ul>
  </div>
</nav>
<div class="container mt-5" >
    <div class="row">
        <div class="col-md 12"> <a href="{{ route('form') }}">NUEVO PRODUCTO</a>
            <div class="table-responsive">
                <table class="table table-striped table-hover table-sm mt-5 ">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>IMAGEN</th>
                            <th>NOMBRE</th>
                            <th>DETALLES</th>
                            <th>PRECIO</th>
                            <th>CANTIDAD</th>
                            <th>ACCIONES</th>
                        </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          @foreach ($inventarios as $resultado)
                          <tr>
                            <td>{{ $resultado->id }}</td>
                            <td>{{ $resultado->img }}</td>
                            <td>{{ $resultado->name }}</td>
                            <td>{{ $resultado->description }}</td>
                            <td>{{ $resultado->price }}</td>
                            <td>{{ $resultado->amout }}</td>
                            <td>
                                <form action="{{ route('inventario.delete', $inventarios->id)}}" method="POST">
                                 @method('DELETE')
                                @csrf
                             <button type="submit" rel="tooltip" title="Eliminar" class="btn btn-danger btn-simple btn-link">
                             <i class="fa fa-times"></i>
                             </button>
                            
                              <a href="" class='btn btn-sm btn warning'>EDITAR</a>
                              <a href="" class='btn btn-sm btn info'>DETALLES</a>
                            </td>
                          </tr>
                            
                          @endforeach
                        </td>
                      </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div> 
</body>
</html>