<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"> </script>
    <link href="{{asset('css/style.css') }}" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <x-app-layout>
        <header>
            <div class="d-flex align-items-center p-0">
                <img class="logo2 ms-5 mt-3 mb-3" src="https://codeweek-s3.s3.amazonaws.com/event_picture/logo_iespoligonosur_aggnet_24ae5691-fd1d-439f-a6cf-38ba50a9f960.png" alt="">

                <!--Menu usuario-->

                <!--Nombre usuario-->
                <div class="dropdown ms-auto ms-5 izq2">

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                            {{ __('Cerrar sesión') }}
                        </x-dropdown-link>
                    </form>

                </div>
            </div>
        </header>
        <x-slot name="header">

        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class=" mb-5 p-6 bg-white border-b border-gray-200">
                        Usuario logueado!
                    </div>
                    @if (@Auth::user()->validacion)
                    <div class="p-6">
                        <a class="nav-link mt-3 text-dark" href="/incidencias">ACCEDER</a>
                    </div>
                    @else
                    <div class='p-6'>
                        <span class="mt-3">Espere a que un administrador le valide.</span>
                    </div>
                    @endif
                </div>
            </div>
    </x-app-layout>
    <!--Footer-->
    <footer class="py-3  bg-dark ">
        <p class="text-center text-muted">© I.E.S. Polígono Sur, 2022</p>
    </footer>

</body>

</html>