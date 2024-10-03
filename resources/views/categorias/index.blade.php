@extends('layout')

@section('content')
    <h2>Lista de Categorías</h2>

    <a href="{{ route('categorias.create') }}">Crear Nueva Categoría</a>

    @if ($message = Session::get('success'))
        <div>{{ $message }}</div>
    @endif

    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Acciones</th>
        </tr>

        @foreach ($categorias as $categoria)
        <tr>
            <td>{{ $categoria->id }}</td>
            <td>{{ $categoria->nombre }}</td>
            <td>{{ $categoria->descripcion }}</td>
            <td>
                <a href="{{ route('categorias.edit', $categoria->id) }}">Editar</a>
                <form action="{{ route('categorias.destroy', $categoria->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection