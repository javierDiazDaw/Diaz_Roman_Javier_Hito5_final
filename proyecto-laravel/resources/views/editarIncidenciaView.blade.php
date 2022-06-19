@extends('layouts.master')
@section('title', 'Editar incidencia')
@section('content')
<div class="row fondoBusqueda">
    <div class="col-12 p-3 ps-5">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="textDecoration letraPequeña" href="#">Inicio</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span class="fw-bold letraPequeña">Lista de incidencias</span></li>
                <li class="breadcrumb-item active" aria-current="page"><span class="fw-bold letraPequeña">Editar</span></li>
            </ol>
        </nav>
        <div>
            <h1 class="h2 letra2">Editar incidencia</h1>
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

    <form class="form-register" action="/incidencias/editar/<?php echo $incidencia->idIncidencia ?>" method="post" enctype="multipart/form-data">
        <div class="row mb-5">
            <div class="col">
                <label for="exampleFormControlInput1" class="form-label fw-bold ">Título</label>
                <input type="text" class="form-control" name="titulo" aria-label="titulo" required value="<?php echo $incidencia->titulo ?>">
            </div>
            <div class="col">
                <label for="exampleFormControlInput2" class="form-label fw-bold ">Aula</label>
                <input type="number" class="form-control" name="aula" aria-label="aula" required value="<?php echo $incidencia->aula ?>">
            </div>
            <div class="col">
                <label for="cbEntidad" class="form-label fw-bold">Estado</label>
                <select class="form-select bordeCuadrado form-select-sm" name="estado" aria-label="estado" required value="<?php echo $incidencia->estado ?>">
                    <option value="nuevo" selected>nuevo</option>
                    <option value="procesado">procesado</option>
                    <option value="resuelto">resuelto</option>
                    <option value="nuevaincidencia">nueva Incidencia</option>
                </select>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col">
                <label for="exampleFormControlInput4"  class="form-label fw-bold ">Descripción</label>
                <input type="text" class="form-control" name="descripcion" aria-label="descripcion" required value="<?php echo $incidencia->descripcion ?>">
            </div>
        </div>
        <div class="row mb-5">
            <div class="col">
                <label for="exampleFormControlInput5"  class="form-label fw-bold ">Fecha de creación</label>
                <input type="date" class="form-control" name="fechaCreacion" aria-label="fechaCreacion" required value="<?php echo $incidencia->fechaCreacion ?>">
            </div>
            <div class="col">
                <label for="exampleFormControlInput6"  class="form-label fw-bold ">Fecha de modificación</label>
                <input type="date" class="form-control" name="fechaModificacion" aria-label="fechaModificacion" required value="<?php echo $incidencia->fechaModificacion ?>">
            </div>
            <div class="col">
                <label for="exampleFormControlInput7" class="form-label fw-bold ">Fecha de cierre</label>
                <input type="date" class="form-control" name="fechaCierre" aria-label="fechaCierre" required value="<?php echo $incidencia->fechaCierre ?>">
            </div>
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