<!DOCTYPE html>
<html lang="en">

<head>
  <script src="https://kit.fontawesome.com/8cd1793adf.js" crossorigin="anonymous"></script>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"> </script>
  <link href="{{asset('css/style.css') }}" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script type="text/javascript" src="{{asset('js/script.js') }}"></script>

</head>

<body>
  <header>
    <div class="d-flex align-items-center p-0">
      <img class="logo2 ms-5 mt-3 mb-3" src="https://codeweek-s3.s3.amazonaws.com/event_picture/logo_iespoligonosur_aggnet_24ae5691-fd1d-439f-a6cf-38ba50a9f960.png" alt="">

      <!--Menu usuario-->

      <!--Nombre usuario-->
      <div class="dropdown ms-auto ms-5 izq2">
        <a href="#" class="d-block link-dark text-decoration-none text-light letraPequeña" data-bs-toggle="dropdown" aria-expanded="false">
          <img src="https://cdn.icon-icons.com/icons2/1508/PNG/512/systemusers_104569.png" alt="mdo" width="32" height="32" class="rounded-circle me-1">
          {{\Session::get('usuario')['nombre']}}
        </a>
        <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
          <li>
            <form method="POST" action="{{ route('logout') }}">
              @csrf

              <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                {{ __('Cerrar sesión') }}
              </x-dropdown-link>
            </form>
          </li>
        </ul>
      </div>
    </div>
  </header>
  <div class="container-fluid">
    <div class="row p-0">
      <div class="col-md-2 p-0 ">
        <nav class="navbar navbar-expand-lg navbar-light p-md-0">
          <div class="container-fluid p-0">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="nav w-100 flex-column">
                <li class="nav-item border-top">
                  <a class="nav-link colorIcono gris activo2" href="/incidencias">
                    <i class="fa-solid circulo fa-table-list ms-2 me-2 rounded-circle "></i><span class="fw-bold">Lista de incidencias</span></a>
                </li>
                @if(\Session::get('usuario')['rol']=='administrador' || \Session::get('usuario')['rol']=='cliente')
                <li class="nav-item border-top">
                  <a class="nav-link colorIcono gris activo2" href="/incidencias/crear">
                    <i class="fa-solid fa-square-plus circulo3 ms-2 me-2 rounded-circle"></i><span class="fw-bold">Crear incidencia</span></a>
                </li>

                <li class="nav-item border-top">
                  <a class="nav-link colorIcono gris activo2" href="/aulas">
                    <i class="fa-solid fa-house-chimney-window circulo3 ms-2 me-2 rounded-circle"></i><span class="fw-bold">Aulas</span></a>
                </li>

                <!--<li class="nav-item border-top">
                  <a class="nav-link colorIcono gris activo2" href="/comentarios">
                    <i class="fa-solid fa-comment circulo3 ms-2 me-2 rounded-circle"></i><span class="fw-bold">Lista de comentarios</span></a>
                </li>-->

                <li class="nav-item border-top">
                  <a class="nav-link colorIcono gris activo2" href="/perfil/editar/{{\Session::get('usuario')['IdUsuario']}}">
                    <i class="fa-solid fa-user circulo3 ms-2 me-2 rounded-circle"></i><span class="fw-bold">Perfil</span></a>
                </li>
                @endif
                @if(\Session::get('usuario')['rol']=='administrador')
                <li class="nav-item border-top">
                  <a class="nav-link colorIcono gris activo2" href='/perfiles'>
                    <i class="fa-solid fa-user circulo3 ms-2 me-2 rounded-circle"></i><span class="fw-bold">Usuarios</span></a>
                </li>
                @endif
              </ul>
            </div>
          </div>
        </nav>
      </div>
      <!--Titulo Lista de Incidencias-->
      <div class="col-12 col-md-9 fondoBlanco mb-5">
        @yield('content')
        <div class="row fondoBlanco">
        </div>
      </div>
    </div>
  </div>
  <!--Footer-->
  <footer class="py-3  bg-dark ">
    <p class="text-center text-muted">© I.E.S. Polígono Sur, 2022</p>
  </footer>

</body>

</html>