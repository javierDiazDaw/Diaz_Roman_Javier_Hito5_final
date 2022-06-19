@extends('layouts.master')
@section('title', 'Crear aula')
@section('content')
<div class="row fondoBusqueda">
    <div class="col-12 p-3 ps-5">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="textDecoration letraPequeña" href="#">Inicio</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span class="fw-bold letraPequeña">Crear aula</span></li>
            </ol>
        </nav>
        <div>
            <h1 class="h2 letra2">Crear aula</h1>
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
    <form class="form-register pb-5" action="/aulas/crear" method="post" enctype="multipart/form-data">
        <div class="row mb-5">
            <input type="hidden" name="aula" value="">
            <div class="col mb-4">
                <label for="exampleFormControlInput1" class="form-label fw-bold ">Curso y Grupo</label>
                <input type="text" class="form-control" name="nombreAula" aria-label="nombreAula">
            </div>
            <div class="row mb-5">
                <div class="col-6 col-md-1">

                    <button type="submit" class="btn acceder">Registrar</button>
                </div>
                
                <div class="col-6 col-md-1 ms-4">
                    <button type="reset" class="btn acceder">Resetear</button>
                </div>
            </div>
    </form>
</div>
@endsection