<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"> </script>
    <link href="{{asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
    <header>
        <div class="d-flex align-items-center p-0">
            <img class="logo2 ms-5 mt-3 mb-3" src="https://codeweek-s3.s3.amazonaws.com/event_picture/logo_iespoligonosur_aggnet_24ae5691-fd1d-439f-a6cf-38ba50a9f960.png" alt="">
        </div>
    </header>
    <x-guest-layout>
        <x-auth-card>
            <x-slot name="logo">
                <a href="/">
                    <img class="logo2 ms-2 mt-3 mb-3" src="https://codeweek-s3.s3.amazonaws.com/event_picture/logo_iespoligonosur_aggnet_24ae5691-fd1d-439f-a6cf-38ba50a9f960.png" alt="">
                </a>
            </x-slot>

            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />

            @if(\Session::has('error'))
            <div class="alert alert-danger">
                {{\Session::get('error')}}
            </div>
            @endif
            <form class="pt-5" method="POST" action="{{ route('register') }}">
                @csrf
                <!-- Nombre -->
                <div>
                    <x-label for="nombre" :value="__('Nombre')" />

                    <x-input id="nombre" class="block mt-1 w-full" type="text" name="nombre" :value="old('nombre')" required autofocus />
                </div>

                <!-- Apellidos -->
                <div class="mt-4">
                    <x-label for="apellidos" :value="__('Apellidos')" />

                    <x-input id="apellidos" class="block mt-1 w-full" type="text" name="apellidos" :value="old('apellidos')" required autofocus />
                </div>

                <!-- Email Address -->
                <div class="mt-4">
                    <x-label for="email" :value="__('Email')" />

                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                </div>

                <!-- Dni -->
                <div class="mt-4">
                    <x-label for="dni" :value="__('DNI')" />

                    <x-input id="dni" class="block mt-1 w-full" type="text" name="dni" :value="old('dni')" required autofocus />
                </div>

                <!-- telefono -->
                <div class="mt-4">
                    <x-label for="telefono" :value="__('Teléfono')" />

                    <x-input id="telefono" class="block mt-1 w-full" type="text" name="telefono" :value="old('telefono')" required autofocus />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-label for="password" :value="__('Contraseña')" />

                    <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                </div>

                <!-- Confirm Password -->
                <div class="mt-4">
                    <x-label for="password_confirmation" :value="__('Confirm Password')" />

                    <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required />
                </div>

                <!-- rol -->
                <div class="mt-4">
                    <x-label for="rol" :value="__('Perfil')" />

                   <!-- <x-input id="rol" class="block mt-1 w-full" type="text" name="rol" :value="old('rol')" required autofocus /-->
                    <select class="form-select bordeCuadrado form-select-sm" id="rol" class="block mt-1 w-full" type="text" name="rol" :value="old('rol')" required autofocus>
                        <option selected>cliente</option>
                        <option value="1">administrador</option>
                    </select>
                </div>

                <div class="flex items-center justify-end mt-4">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                        {{ __('¿Ya estás registrado?') }}
                    </a>

                    <x-button class="ml-4 acceder">
                        {{ __('Registrarse') }}
                    </x-button>
                </div>
            </form>
        </x-auth-card>
    </x-guest-layout>
    <footer class="py-3 bg-dark">
        <p class="text-center text-muted">© I.E.S. Polígono Sur, 2022</p>
    </footer>
</body>

</html>