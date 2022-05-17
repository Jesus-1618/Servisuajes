<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servisuajes</title>
    <link href={{asset("css/navbar/navbar-clientes.css")}} rel="stylesheet">
  

    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
</head>
<body id="body">
    
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="nav-bar col-auto col-md-3 col-xl-2 px-sm-2 px-0">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                    <img class="logo-navbar" src="{{asset("img/principales/logo-servisuajes-b.svg")}}" alt="">
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                        <li class="nav-item">
                            <a href="#" class="nav-link align-middle px-0">
                                <i class="fa-solid fa-house fa-xs fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Inicio</span>
                            </a>
                        </li>
                        <li>
                            <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                <i class=" fa-solid fa-industry fa-xs fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">Alta de Clientes  <i class="fa-solid fa-angle-down"></i></span> </a>
                            <ul class="collapse nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                                <li class="w-100">
                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Clientes</span></a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Contactos</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link align-middle px-0">
                                <i class="fa-solid fa-file-circle-plus fa-xs fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Nueva Solicitud</span>
                            </a>
                        </li>



                    </ul>
                    <hr>
                    <div class="dropdown pb-4">
                        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="https://github.com/mdo.png" alt="hugenerd" width="30" height="30" class="rounded-circle">
                            <span class="d-none d-sm-inline mx-1">{{ Auth::user()->name }}</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                            <li><a class="dropdown-item" href="{{ route('profile.show') }}">Mi Perfil</a></li>
                            <li><a class="dropdown-item" href="#">Ajustes</a></li>                            
                            <li>
                                <hr class="dropdown-divider">
                            </li>                   
            
                                           <!-- Authentication Links -->
                @guest
     
                    @else                            
                            <a class="cerrar-sesion d-block text-light p-3" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                <ion-icon name="power"></ion-icon>
                                {{ __('Cerrar sesión') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                  
                @endguest


                        </ul>
                    </div>
                </div>
            </div>
            <div class="col py-3">
                <main>
                    @yield('content')
                </main>
            </div>
        </div>
    </div>
</body>
</html>