@extends("../layouts.plantilla")
@section("cabeza")

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Gestion De Productos</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/productos">Listado<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/productos/create">Agregar</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Busqueda" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
    </form>
  </div>
</nav>
Insertar Producto
@endsection

@section("cuerpo")
<!--<form method="post" action="/productos"> Forma clasica formularios--> 
{!! Form::open(['url' => '/productos','method' => 'post']) !!}
    <div class="row">
        <div class="col">
            <label for="Nombre">Nombre:</label> 
            <input type="text" class="form-control" id="nombre" name="pro_nom" placeholder="Ingrese el nombre"> 
            {{csrf_field()}} <!--Token de seguridad  -->
        </div>
        <div class="col">
            <label for="Seccion">Seccion:</label>
            <input type="text" class="form-control" id="seccion" name="pro_sec" placeholder="Ingrese la seccion">
        </div>
        <div class="w-100"></div>
        <div class="col">
            <label for="Precio">Precio:</label>
            <input type="text" class="form-control" id="precio" name="pro_pre" placeholder="Ingrese el precio">
        </div>
        <div class="col">
            <label for="Fecha">Fecha:</label>
            <input type="text" class="form-control" id="fecha" name="pro_fec" placeholder="dia/mes/año">
        </div>
        <div class="w-100"></div>
        <div class="col">
            <label for="Pais">Pais Origen:</label>
            <input type="text" class="form-control" id="pais" name="pro_ori" placeholder="Ingrese el pais de origen">
        </div>
        <div class="col"> 
        </div>      
        <div class="w-100"></div>
        <div class="col"> 
            <br>   
            <button class="btn btn-success" type="submit">Guardar</button>
        </div>
        <div class="col"> 
            <br>   
            <button class="btn btn-danger" type="reset">Limpiar Campos</button>
        </div>

        <div class="col"> 
            <br>   
            <a href="{{route('productos.index')}}" class="btn btn-info" role="button" aria-pressed="true">Listado Productos</a>
        </div>
              
    </div> 
</form>
@if(count($errors)>0)
  @foreach($errors->all() as $error)
    {{$error}}
  @endforeach
@endif
@endsection


@section("pie")

@endsection