@extends('layout')
@section('title', 'Servicios Médicos')
@section('content')
<h3 class="mt-4">Lista de Servicios Médicos</h3>
<div class="text-end">
    <a href="{{url('servicios/create')}}" class="btn btn-primary">Agregar Servicio</a>
</div>
<table class="table">
    <thead>
        <tr>
            <th>Código</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Estado</th>
            <th>Requiere Autorización</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($servicios as $servicio)
            <tr>
                <td>{{ $servicio->codigo }}</td>
                <td>{{ $servicio->nombre }}</td>
                <td>${{ number_format($servicio->precio, 2) }}</td>
                <td>{{ $servicio->estado ? 'Activo' : 'Inactivo' }}</td>
                <td>{{ $servicio->requiere_autorizacion ? 'Sí' : 'No' }}</td>
                <td>
                    <a href="{{url('servicios/' . $servicio->id . '/edit')}}" class="btn btn-sm btn-warning">Editar</a>
                    <form action="{{url('servicios/' . $servicio->id)}}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Estás seguro de que deseas eliminar este servicio?')">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@stop()
