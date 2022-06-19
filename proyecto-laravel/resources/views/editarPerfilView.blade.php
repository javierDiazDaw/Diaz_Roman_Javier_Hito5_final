@extends('layouts.master')
@section('title', 'Perfil')
@section('content')
<div class="row fondoBusqueda">
    <div class="col-12 p-3 ps-5">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="textDecoration letraPequeña" href="#">Inicio</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span class="fw-bold letraPequeña">Perfil</span></li>
            </ol>
        </nav>
        <div>
            <h1 class="h2 letra2">Perfil</h1>
        </div>
        <nav style="--bs-breadcrumb-divider: '<';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="textDecoration fw-bold letraPequeña" href="#"><span class="fw-bold">
                            < Volver</span></a></li>
            </ol>
        </nav>
    </div>
</div>
<div class="col-12 table-responsive fondoBlanco letraPequeña ps-5 pe-5 ms-1 mt-5">

    <form class="form-register" action="/perfil/editar/{{$usuario->IdUsuario}}" method="POST" enctype="multipart/form-data">
        @csrf
        {{method_field("PUT")}}
        <div class="row mb-5">
            <div class="col">
                <label for="exampleFormControlInput1" class="form-label fw-bold ">Nombre</label>
                <input type="text" class="form-control" name="nombre" aria-label="nombre" required value="{{$usuario->nombre}}">
            </div>
            <div class="col">
                <label for="exampleFormControlInput2" class="form-label fw-bold ">Apellidos</label>
                <input type="text" class="form-control" name="apellidos" aria-label="apellidos" required value="{{$usuario->apellidos}}">
            </div>
            <div class="col">
                <label for="exampleFormControlInput3" class="form-label fw-bold ">Email</label>
                <input type="text" class="form-control" name="email" aria-label="email" required value="{{$usuario->email}}">
            </div>
        </div>
        <div class="row mb-5">
            <div class="col">
                <label for="exampleFormControlInput3" class="form-label fw-bold ">Tipo de perfil</label>
                <br>
                <label class="h6 mt-2">{{$usuario->rol}}</label>
            </div>
            <div class="col">
                <label for="exampleFormControlInput4" class="form-label fw-bold ">Dni</label>
                <input type="text" class="form-control" name="dni" aria-label="dni" required value="{{$usuario->dni}}">
            </div>
            <div class="col">
                <label for="exampleFormControlInput5" class="form-label fw-bold ">Teléfono</label>
                <input type="number" class="form-control" name="telefono" aria-label="telefono" required value="{{$usuario->telefono}}">
            </div>
            <div class="col">
                <label for="exampleFormControlInput5" class="form-label fw-bold ">Validación</label>
                <div class="form-check">
                    @if ($usuario->validacion)
                    <input class="form-check-input" name="validacion" type="checkbox" value="0">
                    <label class="form-check-label">
                        Pendiente
                    </label>
                    @else
                    <input class="form-check-input" name="validacion" type="checkbox" value="1">
                    <label class="form-check-label">
                        Aceptada
                    </label>
                    @endif
                </div>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-6 col-md-1">

                <button type="submit" class="btn acceder">Registrar</button>
            </div>
            <div class="col-6 col-md-1 ms-4">
                <button type="reset" class="btn acceder">Resetear</button>
            </div>
            <div class="col-6 col-md-2 ms-4">
                <x-button class="ml-3 acceder" type="submit">
                    <a class="sub acceder text-light" href="/incidencias/{{\Session::get('usuario')['IdUsuario']}}">Ver incidencias</a>
                </x-button>  
            </div>
        </div>
    </form>
</div>
@endsection