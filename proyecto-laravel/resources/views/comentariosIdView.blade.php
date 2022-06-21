@extends('layouts.master')
@section('title', 'Lista de comentarios')
@section('content')
<div class="row fondoBusqueda">
    <div class="col-12 p-3 ps-5">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="textDecoration letraPequeña" href="#">Inicio</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span class="fw-bold letraPequeña">Lista de comentarios</span></li>

            </ol>
        </nav>
        <div>
            <h1 class="h2 letra2">Lista de comentarios</h1>
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
    <table class="table table-striped table-sm black">
        <thead class="verde">
            <tr>
                <th>COMENTARIO</th>
                <th>FECHA</th>
                @if(\Session::get('usuario')['rol']=='administrador')
                <th>BORRAR</th>
               @endif
            </tr>
            <thead class="verde">
            @foreach ($comentario as $comentar)
            <tr class="bordeTabla">
                <td>{{$comentar->comentario}}</td>
                <td>{{$comentar->fechaComentario}}</td>
                @if(\Session::get('usuario')['rol']=='administrador')
                <td><a href="/comentarios/borrar/{{$comentar->idComentario}}">Borrar comentario</a></td>
                @endif
            </tr>
            @endforeach
    </table>
</div>
@endsection