@extends('layouts.master')
@section('title', 'Aulas')
@section('content')
<div class="row fondoBusqueda">
    <div class="col-12 p-3 ps-5">
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a class="textDecoration letraPequeña" href="#">Inicio</a></li>
        <li class="breadcrumb-item active" aria-current="page"><span class="fw-bold letraPequeña">Aulas</span></li>
        
        </ol>
    </nav>
    <div>
        <h1 class="h2 letra2">Aulas</h1>
    </div>
    <nav style="--bs-breadcrumb-divider: '<';" aria-label="breadcrumb">
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a class="textDecoration fw-bold letraPequeña" href="#"><span
                class="fw-bold">< Volver</span></a></li>
        </ol>
    </nav>
    </div>
</div>
<div class="col-12 table-responsive fondoBlanco letraPequeña ps-5 pe-5 ms-1 mt-5">
    <table class="table table-striped table-sm black">
        <thead class="verde">
            <tr>
                <th>AULA</th>
                <th>BORRAR</th>                
            </tr>
        <thead class="verde">
        <?php foreach ($aulas as $aula): ?>   
            <tr class="bordeTabla">
                <td><?php echo $aula['nombreAula']?></td>    
                <td><?php echo "<a href=/aulas/borrar/$aula[aula]>Eliminar</a>"?></td>        
            </tr>
        <?php endforeach; ?>
    </table>
    <div class="col-6 col-md-2 mb-3">

                    <button  href="/aulas/crear"  class="btn acceder">Crear aula</button>
                </div>
    
</div>
@endsection 