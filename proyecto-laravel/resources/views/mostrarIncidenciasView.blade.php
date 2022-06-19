@extends('layouts.master')
@section('title', 'Lista de incidencias')
@section('content')
<div class="row fondoBusqueda">
    <div class="col-12 p-3 ps-5">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="textDecoration letraPequeña" href="#">Inicio</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span class="fw-bold letraPequeña">Lista de incidencias</span></li>

            </ol>
        </nav>
        <div>
            <h1 class="h2 letra2">Lista de incidencias</h1>
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



    <nav class="navbar navbar-light float-right">           
        <div class="row mb-5">
            <div class="col">
                <input type="text" id="filtrarTitulo" onkeyup="filtrarTitulo()" class="form-control mr-sm-2"placeholder="Buscar por título" >
            </div>
            <div class="col">
                <input type="number" id="filtrarAula" onkeyup="filtrarAula()" class="form-control mr-sm-2"placeholder="Buscar por aula" >
            </div>
            <div class="col">
                <input type="text" id="filtrarEstado" onkeyup="filtrarEstado()" class="form-control mr-sm-2"placeholder="Buscar por estado" >
            </div>               
        </div>        
    </nav>       

    <table id="tabla" class="table table-striped table-sm black">
        <thead class="verde">
            <tr>
                <th>TITULO</th>
                <th>DESCRIPCIÓN</th>
                <th>AULA</th>
                <th>FECHA CREACIÓN</th>
                <th>FECHA MODIFICACIÓN</th>
                <th>FECHA CIERRE</th>
                <th>ESTADO</th>
                <th>COMENTARIOS</th>
                <th>EDITAR</th>
                <th>ELIMINAR</th>
            </tr>
            <thead class="verde">
                <?php foreach ($incidencias as $incidencia) : ?>
                    <tr class="bordeTabla">
                        <td><?php echo $incidencia['titulo'] ?></td>
                        <td><?php echo $incidencia['descripcion'] ?></td>
                        <td><?php echo $incidencia['aula'] ?></td>
                        <td><?php echo $incidencia['fechaCreacion'] ?></td>
                        <td><?php echo $incidencia['fechaModificacion'] ?></td>
                        <td><?php echo $incidencia['fechaCierre'] ?></td>
                        <td><?php echo $incidencia['estado'] ?></td>
                        <td><?php echo "<a href=/incidencias/comentarios/ver/$incidencia[idIncidencia]>Comentarios</a>" ?></td>
                        <td><?php echo "<a href=/incidencias/editar/$incidencia[idIncidencia]>Editar</a>" ?></td>
                        <td><?php echo "<a href=/incidencias/borrar/$incidencia[idIncidencia]>Borrar</a>" ?></td>
                    </tr>
                <?php endforeach; ?>
    </table>
</div>
@endsection