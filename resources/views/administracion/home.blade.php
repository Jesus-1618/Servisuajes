@extends('layouts.navbar-clientes')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href={{asset("css/administracion/home.css")}} rel="stylesheet">
    <title>Home</title>
          <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.css"/>
 
      <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.js"></script>
    
</head>
<body>
    <div class="p-4">
        <h1 class="display-4 titulo">Bienvenido {{ Auth::user()->name }}</h1>
        <p class="lead texto">Este es tu mesa de trabajo, aqui podras encontrar notificaciones asi como resumenes de los movimientos de tu area.</p>
        <hr class="my-2">
        
        <div class="container px-3">
        <h2 class="pb-1 titulo-b">Resumen</h2>
          <div class="">
            <div class="col">
              <div class="row d-col my-2">

                <div class="col-md-3">
                  <div class="card m-3 bottom-radious border-0 shadow bg-primary text-white">
                    <div class="card-body d-flex justify-content-between">
                      <div class="card-title">
                        <i class="fa-solid fa-calculator icono-dashboard"></i>
                      </div>
                      <div class="text-right">
                        <p class="card-text fw-bold">00.00</p>
                        <small>Total Amount</small>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-3">
                  <div class="card m-3 bottom-radious border-0 shadow bg-secondary text-white">
                    <div class="card-body d-flex justify-content-between">
                      <div class="card-title">
                        <i class="fa-solid fa-box icono-dashboard"></i>
                      </div>
                      <div class="text-right">
                        <p class="card-text fw-bold">00.00</p>
                        <small>Bills & Payments</small>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-3">
                  <div class="card m-3 bottom-radious border-0 shadow bg-success text-white">
                    <div class="card-body d-flex justify-content-between">
                      <div class="card-title">
                        <i class="fa-solid fa-dolly icono-dashboard"></i>
                      </div>
                      <div class="text-right">
                        <p class="card-text fw-bold">00.00</p>
                        <small>Total Spend</small>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-3">
                    <div class="card m-3 bottom-radious border-0 shadow bg-info text-white">
                      <div class="card-body d-flex justify-content-between">
                        <div class="card-title">
                          <i class="fa-solid fa-box-open icono-dashboard"></i>
                        </div>
                        <div class="text-right">
                          <p class="card-text fw-bold">00.00</p>
                          <small>Total Spend</small>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
            </div>

          </div>
          <div class="table-responsive py-3"> 
            <h2 class="pb-2">Ultimos movimientos</h2>
            <table id="table" class="table table-bordered table-hover table-striped">
              <thead class="estilos-encabezado">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">First</th>
                  <th scope="col">Last</th>
                  <th scope="col">Handle</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Jacob</td>
                  <td>Thornton</td>
                  <td>@fat</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Larry</td>
                  <td>the Bird</td>
                  <td>@twitter</td>
                </tr>
                 <tr>
                  <th scope="row">4</th>
                  <td>Larry</td>
                  <td>the Bird</td>
                  <td>@twitter</td>
                </tr>
                <tr>
                  <th scope="row">5</th>
                  <td>Larry</td>
                  <td>the Bird</td>
                  <td>@twitter</td>
                </tr>
              </tbody>
            </table>
            </div>


            <div class="">
                <h2 class="pb-2">Mensajes al area</h2>
                <div class="row">
                    <div class="col-sm-4">
                      <div class="card">
                        <div class="card-body">
                          <h5 class="card-title">Special title treatment</h5>
                          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="card">
                        <div class="card-body">
                          <h5 class="card-title">Special title treatment</h5>
                          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card">
                          <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                          </div>
                        </div>
                      </div>
                  </div>
              </div>
            
        </div>
      </div>


      
      

<!-- JAVA DATA TABLE -->
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>

<!-- ID Manda llamar DATA TABLE -->
<script>
    $(document).ready( function () {
      var table = $('#table').DataTable( {
        pageLength : 5,
        lengthMenu: [[5, 10, 20, -1], [5, 10, 20, 'Todos']]
      } )
    } );
    </script>
    
</body>
</html>
@endsection
