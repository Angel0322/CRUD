@extends('layout')

@section('content')
    <h2>Editar Categoría</h2>

    <form action="{{ route('categorias.update', $categoria->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" value="{{ $categoria->nombre }}">

        <label for="descripcion">Descripción:</label>
        <textarea name="descripcion">{{ $categoria->descripcion }}</textarea>

        <button type="submit">Actualizar</button>
    </form>
@endsection