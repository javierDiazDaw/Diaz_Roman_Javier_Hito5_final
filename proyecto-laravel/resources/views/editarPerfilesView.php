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
         
    <form class="form-register" action="/perfil/editar/<?php echo $usuario->idUsuario?>" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="row mb-5">
            <div class="col">
                <label for="exampleFormControlInput1" class="form-label fw-bold ">Nombre</label>
                <input type="text" class="form-control" aria-label="titulo" required value="<?php echo $usuario->nombre ?>">
            </div>
            <div class="col">
                <label for="exampleFormControlInput2" class="form-label fw-bold ">Apellidos</label>
                <input type="text" class="form-control" aria-label="apellidos" required value="<?php echo $usuario->apellidos ?>">
            </div>
            <div class="col">
                <label for="exampleFormControlInput2" class="form-label fw-bold ">Email</label>
                <input type="text" class="form-control" aria-label="estado" required value="<?php echo $usuario->email ?>">
            </div>
        </div>
        <div class="row mb-5">
            <div class="col">
                <label for="exampleFormControlInput2" class="form-label fw-bold ">Rol</label>
                <br>
                <label class="h6 mt-2">{{auth()->user()->rol}}</label>
                
            </div>
            <div class="col">
                <label for="exampleFormControlInput4" class="form-label fw-bold ">Dni</label>
                <input type="text" class="form-control" aria-label="fechaCreacion" required value="<?php echo $usuario->dni ?>">
            </div>
            <div class="col">
                <label for="exampleFormControlInput5" class="form-label fw-bold ">Teléfono</label>
                <input type="number" class="form-control" aria-label="fechaModificacion" required value="<?php echo $usuario->telefono ?>">
            </div>
            <div class="col">
                <label for="cbEntidad" class="form-label fw-bold">Estado</label>
                <select class="form-select bordeCuadrado form-select-sm" aria-label="estado" required value="<?php echo $incidencia->estado ?>">
                    <option selected>nuevo</option>
                    <option value="1">procesado</option>
                    <option value="2">resuelto</option>
                    <option value="3">nueva Incidencia</option>
                </select>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-6 col-md-1">
                <input type="submit" name="submit" value="Registrar" class="btn-enviar">
            </div>
            <div class="col-6 col-md-1 ms-4">
                <input type="reset" name="reset" value="Resetear" class="btn-resetear">
            </div>
        </div>
    </form>
</div>
@endsection