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
      
    </ul>
  </div>
</nav>
Editar Producto
@endsection

@section("cuerpo")
<form method="post" action="/productos/{{$pdts->id}}">
<input type="hidden" name="_method" value="PUT">
    <div class="row">
        <div class="col">
            <label for="Nombre">Nombre:</label>
            <input type="text" class="form-control" id="nombre" name="pro_nom" value="{{$pdts->pro_nom}}">
            {{csrf_field()}} <!--Token de seguridad  -->
        </div>
        <div class="col">
            <label for="Seccion">Seccion:</label>
            <input type="text" class="form-control" id="seccion" name="pro_sec" value="{{$pdts->pro_sec}}">
        </div>
        <div class="w-100"></div>
        <div class="col">
            <label for="Precio">Precio:</label>
            <input type="text" class="form-control" id="precio" name="pro_pre" value="{{$pdts->pro_pre}}">
        </div>
        <div class="col">
            <label for="Fecha">Fecha:</label>
            <input type="text" class="form-control" id="fecha" name="pro_fec" value="{{$pdts->pro_fec}}">
        </div>
        <div class="w-100"></div>
        <div class="col">
            <label for="Pais">Pais Origen:</label>
            <input type="text" class="form-control" id="pais" name="pro_ori" value="{{$pdts->pro_ori}}">
        </div>
        <div class="col"> 
        </div>      
        <div class="w-100"></div>
        <div class="col"> 
            <br>   
            <button class="btn btn-success" type="submit">Actualizar</button>
        </div>       
        <div class="col"> 
            <br>   
            <a href="{{route('productos.index')}}" class="btn btn-info" role="button" aria-pressed="true">Listado Productos</a>
        </div>
              
    </div> 
          
</form>
@endsection


@section("pie")

@endsection