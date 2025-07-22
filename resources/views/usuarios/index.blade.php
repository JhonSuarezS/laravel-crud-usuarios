@extends('layout')

@section('titulo', 'Lista de Usuarios')

@section('contenido')
  <h1 class="mb-4">Usuarios</h1>

  <a href="{{ route('usuarios.create') }}" class="btn btn-success mb-3">+ Crear nuevo usuario</a>

  @if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
  @endif

  <table class="table table-bordered">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Email</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($usuarios as $usuario)
        <tr>
          <td>{{ $usuario->id }}</td>
          <td>{{ $usuario->nombre }}</td>
          <td>{{ $usuario->email }}</td>
          <td>
            <a href="{{ route('usuarios.edit', $usuario->id) }}" class="btn btn-sm btn-warning">Editar</a>
            <form action="{{ route('usuarios.destroy', $usuario->id) }}" method="POST" style="display:inline-block;">
              @csrf
              @method('DELETE')
              <button class="btn btn-sm btn-danger" onclick="return confirm('¿Estás seguro?')">Eliminar</button>
            </form>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
@endsection
