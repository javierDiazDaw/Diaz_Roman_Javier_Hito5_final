@extends('layouts.master')
@section('title', 'Lista de comentarios')
@section('content')
<table id="tabla" class="py-4 table table-striped table-sm black">
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
            @foreach ($incidencia as $inci)
            <tr class="bordeTabla">
                <td>{{$inci->titulo}}</td>
                <td>{{$inci->descripcion}}</td>
                <td>{{$inci->aula}}</td>
                <td>{{$inci->fechaCreacion}}</td>
                <td>{{$inci->fechaModificacion}}</td>
                <td>{{$inci->fechaCierre}}</td>
                <td>{{$inci->estado}}</td>
            </tr>
            @endforeach
</table>
@endsection