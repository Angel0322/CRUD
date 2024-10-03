@extends('layout')

@section('content')
    <h2>Crear Categoría</h2>

    <form action="{{ route('categorias.store') }}" method="POST">
        @csrf

        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre">

        <label for="descripcion">Descripción:</label>
        <textarea name="descripcion" id="descripcion"></textarea>

        <button type="submit">Guardar</button>
    </form>
@endsection