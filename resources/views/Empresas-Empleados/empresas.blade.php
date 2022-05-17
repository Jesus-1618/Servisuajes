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
    <title>Document</title>
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
                    <table id="divisiones" class="table table-hover table-bordered">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre Empresa</th>
                            <th scope="col">Contactos</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($verEmpresas as $DI)
                                <tr class="table-white">
                                    <td>{{$DI->id}}</td>
                                    <td>{{$DI->nombre}}</td>
                                    <td>...</td>
                                </tr>
                            @endforeach

                        </tbody>
                      </table>
                </div>
            </div>
            
        </div>
    

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>

@endsection