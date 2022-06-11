@extends('layouts.navbar-clientes')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>  
    <link href={{asset("css/principal.css")}} rel="stylesheet">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.css"/> 
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.js"></script>
</head>
<body>
    @if (session()->has('Exito'))
                    <div class="alert alert-success" role="alert">
                    {{session ('Exito')}}
                    </div>
                
                    {!!"<script>
                    Swal.fire('Genial','Datos Guardados Correctamente','success')
                    </script>"!!}
    @endif

    @if (session()->has('Exito1'))
                    <div class="alert alert-success" role="alert">
                    {{session ('Exito1')}}
                    </div>
                
                    {!!"<script>
                    Swal.fire('Genial','Datos Guardados Correctamente','success')
                    </script>"!!}
    @endif
<<<<<<< HEAD
    <!--TITULO-->
    <div class="container">
        <div class="">
            <h1 class="titulo">Alta de clientes</h1>
            <p class="texto">Podras dar la alta de clientes de servisuajes y administrar la agenda de la empresa</p>
            <hr class="my-2">
=======

    <!--Actualizar Contacto-->
    @if (session()->has('Exito2'))
        <div class="alert alert-success" role="alert">
        {{session ('Exito2')}}
        </div>

        {!!"<script>
        Swal.fire('Genial','Datos Actualizados Correctamente','success')
        </script>"!!}
    @endif

    <!--Eliminar Contacto-->
    @if (session()->has('Exito3'))
        <div class="alert alert-success" role="alert">
        {{session ('Exito3')}}
        </div>

        {!!"<script>
        Swal.fire('Genial','Datos Borrados Correctamente','success')
        </script>"!!}
    @endif

        <div class="container">
            <form action="{{ route('registrarEmpresas.store') }}" method="POST">
                {!!csrf_field()!!}

                <div class="row">
                    <h1 style="color: #1868d1 ">Registrar Empresa</h1>
                    <div class="col-5">
                        <label for="">Nombre Empresa:</label> 
                        <input class="form-control" type="text" name="nombre_empresa"  aria-label="default input example">
                        {!! $errors->first('nombre_empresa', '<span class="text-danger">:message</span>') !!}
                        <br>
                        <button type="submit" class="btn btn-outline-primary">Guardar</button>
                    </div>
            </form>
                <div class="col-5">
                    <table class="table table-striped table-bordered table-sm mt-2">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre Empresa</th>
                            <th scope="col">Agregar Contacto</th>
                            <th scope="col">Ver</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($verEmpresas as $DI)
                                <tr class="table-white">
                                    <td>{{$DI->id}}</td>
                                    <td>{{$DI->nombre}}</td>
                                    <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal {{ $DI->id }}">
                                        Click aquí!
                                    </button></td>
                                    <td class="text-center"><a href="{{ route('verContacto.show', $DI->id) }}" ><input type="submit" class="btn btn-success btn-sm" value="Click aquí!"></td> </a></td>
                                    <div class="modal fade" id="exampleModal {{ $DI->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel2">Agregar Contacto: {{ $DI->nombre }}</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{ route('registrarContacto.store') }}" method="post">
                                                    {!!csrf_field()!!}
                                                    <div class="row">
                
                                                        <div class="col">
                                                            <label for="">Nombre:</label>
                                                            <input class="form-control" type="text" name="nombre"  aria-label="default input example">
                                                            {!! $errors->first('nombre', '<span class="text-danger">:message</span>') !!}
                                                        </div>
                                
                                                        <div class="col">
                                                            <label for="">Departamento:</label>
                                                            <select name="departamento" class="form-select" aria-label="Default select example">
                                                                <option value="" selected disabled>--Seleccionar una opción--</option>
                                                                <option value="Ventas">Ventas</option>
                                                                <option value="Diseño">Diseño</option>
                                                                <option value="Ingenieria">Ingeniería</option>
                                                            </select>
                                                            {!! $errors->first('departamento', '<span class="text-danger">:message</span>') !!}
                                                        </div>
                                                </div>
                                                <div class="row mt-2">
                                                    <div class="col">
                                                        <label for="">Correo:</label>
                                                        <input class="form-control" type="email" name="correo"  aria-label="default input example">
                                                        {!! $errors->first('correo', '<span class="text-danger">:message</span>') !!}
                                                    </div>
                                                    <div class="col">
                                                        <label for="">Celular:</label>
                                                        <input class="form-control" type="number" name="celular"  aria-label="default input example">
                                                        {!! $errors->first('celular', '<span class="text-danger">:message</span>') !!}
                                                    </div>
                                                </div>
                                                <div class="row mt-2">
                                                    <div class="col-6">
                                                        <label for="">Teléfono:</label>
                                                        <input class="form-control" type="number" name="telefono"  aria-label="default input example">
                                                        {!! $errors->first('telefono', '<span class="text-danger">:message</span>') !!}
                                                    </div>
                                                    <div class="col d-none">
                                                        <label for="">Empresa:</label>
                                                        <input class="form-control" type="number" name="empresa"  aria-label="default input example" value="{{ $DI->id }}">
                                                        {!! $errors->first('empresa', '<span class="text-danger">:message</span>') !!}
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                            <button type="submit" class="btn btn-primary">Guardar</button>
                                            </form>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </tr>
                            @endforeach

                        </tbody>
                      </table>
                </div>
            </div>
            
>>>>>>> cfa25690013a6576d8d0433dc4545011e56c9b46
        </div>

    </div>
    
    <div class="container">

        <div class="row">
            <!--REGISTRO-->
            <div class="col-4">
                <h2 class="subtitulo py-3">Registro de clientes</h2>
                <form action="{{ route('registrarEmpresas.store') }}" method="POST">
                    {!!csrf_field()!!}  
                        <div class="formulario">
                            <div class="">
                                <label for="">Nombre Empresa:</label> 
                                <input class="form-control" type="text" name="nombre_empresa"  aria-label="default input example">
                                {!! $errors->first('nombre_empresa', '<span class="text-danger">:message</span>') !!}
                            </div>

                            <div class="py-2">
                                <label for="">Dirección principal:</label> 
                                <input class="form-control" type="text" name="direccion_principal"  aria-label="default input example">
                                {!! $errors->first('direccion_principal', '<span class="text-danger">:message</span>') !!}
                            </div>

                            <div class="py-2">
                                <label for="">Telefono principal:</label> 
                                <input class="form-control" type="number" name="telefono_principal"  aria-label="default input example">
                                {!! $errors->first('telefono_principal', '<span class="text-danger">:message</span>') !!}
                            </div>

                            <div class="py-2">
                                <label for="">Correo principal:</label> 
                                <input class="form-control" type="mail" name="correo_principal"  aria-label="default input example">
                                {!! $errors->first('correo_principal', '<span class="text-danger">:message</span>') !!}
                            </div>                          

                            <button type="submit" class="my-3 btn btn-outline-primary"><i class="fa-solid fa-floppy-disk"></i> Guardar</button>
                        </div>
                </form>
            </div>
            <!--TABLA-->
            <div class="col-8">
                <h2 class="subtitulo py-3">Datos basicos de clientes</h2>

                <table id="tableClientes" class="table table-bordered table-hover table-striped">
                    <thead class="estilos-encabezado">
                      <tr>
                        <th scope="col">Consecutivo</th>
                        <th scope="col">Empresa</th>
                        <th scope="col">Direccion</th>
                        <th scope="col">Telefono</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Agregar</th>
                        <th scope="col">Ver</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($verEmpresas as $DI)
                        <tr class="">
                            <td>{{$DI->id}}</td>
                            <td>{{$DI->nombre}}</td>
                            <td>{{$DI->direccion_principal}}</td>
                            <td>{{$DI->telefono_principal}}</td>
                            <td>{{$DI->correo_principal}}</td>
                            <td>
                                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal {{ $DI->id }}">
                                    <i class="fa-solid fa-circle-plus"></i> Contacto
                                </button>
                            </td>
                            <td class="text-center"><a href="{{ route('verContacto.show', $DI->id) }}" >
                                <button class="btn btn-primary btn-sm">
                                    <i class="fa-solid fa-address-book"></i>
                                </button>
                            </td>
                            <div class="modal fade" id="exampleModal {{ $DI->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel2">Agregar Contacto: {{ $DI->nombre }}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ route('registrarContacto.store') }}" method="post">
                                            {!!csrf_field()!!}
                                            <div class="row">
        
                                                <div class="col">
                                                    <label for="">Nombre:</label>
                                                    <input class="form-control" type="text" name="nombre"  aria-label="default input example">
                                                    {!! $errors->first('nombre', '<span class="text-danger">:message</span>') !!}
                                                </div>
                        
                                                <div class="col">
                                                    <label for="">Departamento:</label>
                                                    <select name="departamento" class="form-select" aria-label="Default select example">
                                                        <option value="" selected disabled>--Seleccionar una opción--</option>
                                                        <option value="Ventas">Ventas</option>
                                                        <option value="Diseño">Diseño</option>
                                                        <option value="Ingenieria">Ingeniería</option>
                                                    </select>
                                                    {!! $errors->first('departamento', '<span class="text-danger">:message</span>') !!}
                                                </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col">
                                                <label for="">Correo:</label>
                                                <input class="form-control" type="email" name="correo"  aria-label="default input example">
                                                {!! $errors->first('correo', '<span class="text-danger">:message</span>') !!}
                                            </div>
                                            <div class="col">
                                                <label for="">Celular:</label>
                                                <input class="form-control" type="number" name="celular"  aria-label="default input example">
                                                {!! $errors->first('celular', '<span class="text-danger">:message</span>') !!}
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-6">
                                                <label for="">Teléfono:</label>
                                                <input class="form-control" type="number" name="telefono"  aria-label="default input example">
                                                {!! $errors->first('telefono', '<span class="text-danger">:message</span>') !!}
                                            </div>
                                            <div class="col d-none">
                                                <label for="">Empresa:</label>
                                                <input class="form-control" type="number" name="empresa"  aria-label="default input example" value="{{ $DI->id }}">
                                                {!! $errors->first('empresa', '<span class="text-danger">:message</span>') !!}
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                    <button type="submit" class="btn btn-primary">Guardar</button>
                                    </form>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </tr>
                    @endforeach
                    </tbody>
                  </table>



            </div>
        </div>
    </div>           

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- JAVA DATA TABLE -->
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>

<!-- ID Manda llamar DATA TABLE -->
<script>
    $(document).ready( function () {
      var table = $('#tableClientes').DataTable( {
        pageLength : 5,
        lengthMenu: [[5, 10, 20, -1], [5, 10, 20, 'Todos']]
      } )
    } );
</script>
</body>
</html>

@endsection