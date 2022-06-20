@extends('layouts.navbar-clientes')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.css"/> 
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.js"></script>
    <title>Document</title>
</head>
<body>

    <div class="container">
        <h1 style="color: #1868d1 ">Contactos registrados</h1>
        <table id="tableContacto" class="table table-striped table-bordered table-sm mt-2">
            <thead>
              <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Departamento</th>
                <th scope="col">Correo</th>
                <th scope="col">Celular</th>
                <th scope="col">Teléfono</th>
                <th scope="col">Ext</th>
                <th scope="col">Teléfono 2</th>
                <th scope="col">Ext 2</th>
                <th scope="col">Comentario</th>
                <th scope="col">Editar</th>
                <th scope="col">Eliminar</th>
              </tr>
            </thead>
            <tbody>
                @foreach($contactos as $DI)
                    <tr class="table-white">
                        <td>{{$DI->nombre_contacto}}</td>
                        <td>{{$DI->departamento}}</td>
                        <td>{{$DI->correo}}</td>
                        <td>{{$DI->celular}}</td>
                        <td>{{$DI->telefono}}</td>
                        <td>{{$DI->ext}}</td>
                        <td>{{$DI->telefono2}}</td>
                        <td>{{$DI->ext2}}</td>
                        <td>{{$DI->comentario}}</td>
                        <!--Modal editar-->
                        <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal {{ $DI->id }}">
                            Click aquí!
                        </button></td>
                        <div class="modal fade" id="exampleModal {{ $DI->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel2">Editar contacto:</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('actualizarcontacto.put', $DI->id) }}" method="post">
                                        {!! method_field('PUT')!!}
                                        {!!csrf_field()!!}
                                        <div class="row">
    
                                            <div class="col">
                                                <label for="">Nombre:</label>
                                                <input class="form-control" type="text" name="nombre"  aria-label="default input example" value="{{ $DI->nombre_contacto }}">
                                                {!! $errors->first('nombre', '<span class="text-danger">:message</span>') !!}
                                            </div>
                    
                                            <div class="col">
                                                <label for="">Departamento:</label>
                                                <select name="departamento" class="form-select" aria-label="Default select example">
                                                    <option value="{{ $DI->departamento }}" selected>{{ $DI->departamento }}</option>
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
                                            <input class="form-control" type="email" name="correo"  aria-label="default input example" value="{{ $DI->correo }}">
                                            {!! $errors->first('correo', '<span class="text-danger">:message</span>') !!}
                                        </div>
                                        <div class="col">
                                            <label for="">Celular:</label>
                                            <input class="form-control" type="number" name="celular"  aria-label="default input example" value="{{ $DI->celular }}">
                                            {!! $errors->first('celular', '<span class="text-danger">:message</span>') !!}
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-6">
                                            <label for="">Teléfono:</label>
                                            <input class="form-control" type="number" name="telefono"  aria-label="default input example" value="{{ $DI->telefono }}">
                                            {!! $errors->first('telefono', '<span class="text-danger">:message</span>') !!}
                                        </div>
                                        <div class="col-6">
                                            <label for="">Ext:</label>
                                            <input class="form-control" type="number" name="ext"  aria-label="default input example" value="{{ $DI->ext }}">
                                            {!! $errors->first('empresa', '<span class="text-danger">:message</span>') !!}
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-6">
                                            <label for="">Teléfono 2:</label>
                                            <input class="form-control" type="number" name="telefono2"  aria-label="default input example" value="{{ $DI->telefono2 }}">
                                            {!! $errors->first('telefono', '<span class="text-danger">:message</span>') !!}
                                        </div>
                                        <div class="col-6">
                                            <label for="">Ext 2:</label>
                                            <input class="form-control" type="number" name="ext2"  aria-label="default input example" value="{{ $DI->ext2 }}">
                                            {!! $errors->first('empresa', '<span class="text-danger">:message</span>') !!}
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col">
                                            <label for="">Comentario:</label>
                                            <input class="form-control" type="text" name="comentario"  aria-label="default input example" value="{{ $DI->comentario }}">
                                            {!! $errors->first('telefono', '<span class="text-danger">:message</span>') !!}
                                        </div>
                                        <div class="col d-none">
                                            <label for="">Empresa:</label>
                                            <input class="form-control" type="number" name="empresa"  aria-label="default input example">
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

                        <!--Modal Eliminar-->
                        <td><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal1 {{ $DI->id }}">
                            Click aquí!
                        </button></td>

                        <div class="modal fade" id="exampleModal1 {{ $DI->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel2">Eliminar contacto:</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('eliminarcontacto.delete', $DI->id) }}" method="post">
                                        {!! method_field('DELETE')!!}
                                        {!!csrf_field()!!}
                                        <div class="row">
    
                                            <div class="col">
                                                <label for="">Nombre:</label>
                                                <input class="form-control" type="text" name="nombre"  aria-label="default input example" value="{{ $DI->nombre_contacto }}">
                                                {!! $errors->first('nombre', '<span class="text-danger">:message</span>') !!}
                                            </div>
                    
                                            <div class="col">
                                                <label for="">Departamento:</label>
                                                <select name="departamento" class="form-select" aria-label="Default select example">
                                                    <option value="{{ $DI->departamento }}" selected>{{ $DI->departamento }}</option>
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
                                            <input class="form-control" type="email" name="correo"  aria-label="default input example" value="{{ $DI->correo }}">
                                            {!! $errors->first('correo', '<span class="text-danger">:message</span>') !!}
                                        </div>
                                        <div class="col">
                                            <label for="">Celular:</label>
                                            <input class="form-control" type="number" name="celular"  aria-label="default input example" value="{{ $DI->celular }}">
                                            {!! $errors->first('celular', '<span class="text-danger">:message</span>') !!}
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-6">
                                            <label for="">Teléfono:</label>
                                            <input class="form-control" type="number" name="telefono"  aria-label="default input example" value="{{ $DI->telefono }}">
                                            {!! $errors->first('telefono', '<span class="text-danger">:message</span>') !!}
                                        </div>
                                        <div class="col d-none">
                                            <label for="">Empresa:</label>
                                            <input class="form-control" type="number" name="empresa"  aria-label="default input example">
                                            {!! $errors->first('empresa', '<span class="text-danger">:message</span>') !!}
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                <button type="submit" class="btn btn-danger">Eliminar</button>
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

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- JAVA DATA TABLE -->
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>

    <script>
        $(document).ready( function () {
          var table = $('#tableContacto').DataTable( {
            "scrollX": true,
            pageLength : 5,
            lengthMenu: [[5, 10, 20, -1], [5, 10, 20, 'Todos']]
          } )
          $('.dataTables_length').addClass('bs-select');
        } );
    </script>
</body>
</html>

@endsection