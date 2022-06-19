@extends('layouts.master')
@section('title', 'Lista de usuarios')
@section('content')
<div class="row fondoBusqueda">
    <div class="col-12 p-3 ps-5">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="textDecoration letraPequeña" href="#">Inicio</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span class="fw-bold letraPequeña">Lista de usuarios</span></li>

            </ol>
        </nav>
        <div>
            <h1 class="h2 letra2">Lista de usuarios</h1>
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
                <input type="text" id="filtrarNombre" onkeyup="filtrarNombre()" class="form-control mr-sm-2" placeholder="Buscar por nombre">
            </div>
            <div class="col">
                <input type="number" id="filtrarApellidos" onkeyup="filtrarApellidos()" class="form-control mr-sm-2" placeholder="Buscar por apellidos">
            </div>
            <div class="col">
                <input type="text" id="filtrarEmail" onkeyup="filtrarEmail()" class="form-control mr-sm-2" placeholder="Buscar por email">
            </div>
            <div class="col">
                <input type="text" id="filtrarDNI" onkeyup="filtrarDNI()" class="form-control mr-sm-2" placeholder="Buscar por DNI">
            </div>
            <div class="col">
                <input type="text" id="filtrarTeléfono" onkeyup="filtrarTeléfono()" class="form-control mr-sm-2" placeholder="Buscar por teléfono">
            </div>
        </div>
    </nav>

    <table id="tabla" class="table table-striped table-sm black">
        <thead class="verde">
            <tr>
                <th>NOMBRE</th>
                <th>APELLIDOS</th>
                <th>EMAIL</th>
                <th>DNI</th>
                <th>TELÉFONO</th>
                <th>ROL</th>
                <th>VALIDACIÓN</th>
                <th>EDITAR</th>
                <th>ELIMINAR</th>
            </tr>
            <thead class="verde">
                <?php foreach ($usuarios as $usuario) : ?>
                    <tr class="bordeTabla">
                        <td><?php echo $usuario['nombre'] ?></td>
                        <td><?php echo $usuario['apellidos'] ?></td>
                        <td><?php echo $usuario['email'] ?></td>
                        <td><?php echo $usuario['dni'] ?></td>
                        <td><?php echo $usuario['telefono'] ?></td>
                        <td><?php echo $usuario['rol'] ?></td>
                        @if($usuario->validacion == 0)
                        <td><i class="fa-solid fa-circle-xmark iconoX justify-align-center"></i></td>
                        @else
                        <td><i class="fa-solid fa-circle-check iconoV justify-align-center"></i></td>
                        @endif
                        <td><?php echo "<a href=/perfiles/editar/$usuario[IdUsuario]>Editar</a>" ?></td>
                        <td><?php echo "<a href=/perfiles/borrar/$usuario[IdUsuario]>Eliminar</a>" ?></td>
                    </tr>
                <?php endforeach; ?>
    </table>
</div>
@endsection