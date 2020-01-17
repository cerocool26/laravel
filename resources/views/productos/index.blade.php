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
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Busqueda" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
    </form>
  </div>
</nav>
Listado de Productos
@endsection

@section("cuerpo")


   
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Editar</th> 
      <th scope="col">Eliminar</th> 
      <th scope="col">Id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Seccion</th>
      <th scope="col">Precio</th>
      <th scope="col">Fecha</th>
      <th scope="col">Pais Origen</th>

    </tr>
  </thead>
  @foreach($prodts as $producto)
  <tbody>
    <tr>
      <th scope="row"><a href="{{route('productos.edit',$producto->id)}}" class="btn btn-outline-warning" role="button" aria-pressed="true">Actualizar</a></th>
      
      
      
      <form method="post" action="/productos/{{$producto->id}}">
      {{csrf_field()}} <!--Token de seguridad  -->
      <input type="hidden" name="_method" value="DELETE">
      <th scope="row"><button class="btn btn-outline-danger" type="submit">Eliminar</button></th>
      </form>

      <th scope="row">{{$producto->id}}</th>
      <td>{{$producto->pro_nom}}</td>
      <td>{{$producto->pro_sec}}</td>
      <td>{{$producto->pro_pre}}</td>
      <td>{{$producto->pro_fec}}</td>
      <td>{{$producto->pro_ori}}</td>
    </tr>
  </tbody>
  @endforeach 
</table>
 
@endsection
@section("pie")
Derechos Reservados 2020
@endsection