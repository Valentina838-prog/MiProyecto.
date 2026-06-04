@extends('layout')

@section('title', 'Editar Servicio')

@section('content')

<h3 class="mt-4 mb-3">Editar Servicio</h3>

<form action="{{ url('servicios/'.$servicio->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label>Código</label>
        <input type="text" class="form-control"
               name="codigo"
               value="{{ $servicio->codigo }}"
               required>
    </div>

    <div class="form-group">
        <label>Nombre</label>
        <input type="text" class="form-control"
               name="nombre"
               value="{{ $servicio->nombre }}"
               required>
    </div>

    <div class="form-group">
        <label>Precio</label>
        <input type="number" class="form-control"
               name="precio"
               value="{{ $servicio->precio }}"
               step="0.01"
               required>
    </div>

    <div class="form-group">
        <label>Estado</label>
        <select class="form-control" name="estado">
            <option value="1" {{ $servicio->estado == 1 ? 'selected' : '' }}>
                Activo
            </option>
            <option value="0" {{ $servicio->estado == 0 ? 'selected' : '' }}>
                Inactivo
            </option>
        </select>
    </div>

    <div class="form-group">
        <label>Requiere Autorización</label>
        <select class="form-control" name="requiereautorizacion">
            <option value="1" {{ $servicio->requiereautorizacion == 1 ? 'selected' : '' }}>
                Sí
            </option>
            <option value="0" {{ $servicio->requiereautorizacion == 0 ? 'selected' : '' }}>
                No
            </option>
        </select>
    </div>

    <br>

    <button type="submit" class="btn btn-primary">
        Actualizar
    </button>

    <a href="{{ url('servicios') }}" class="btn btn-secondary">
        Volver
    </a>

</form>

@endsection