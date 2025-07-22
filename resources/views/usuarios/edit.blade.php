@extends('layout')

@section('titulo', 'Editar Usuario')

@section('contenido')
  <h1 class="mb-4">Editar usuario</h1>

  <a href="{{ route('usuarios.index') }}" class="btn btn-secondary mb-3">← Volver</a>

  @if ($errors->any())
    <div class="alert alert-danger">
      <ul class="mb-0">
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif

  <form action="{{ route('usuarios.update', $usuario->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
      <label for="nombre" class="form-label">Nombre</label>
      <input type="text" name="nombre" id="nombre" class="form-control" value="{{ old('nombre', $usuario->nombre) }}" required>
    </div>

    <div class="mb-3">
      <label for="email" class="form-label">Correo electrónico</label>
      <input type="email" name="email" id="email" class="form-control" value="{{ old('email', $usuario->email) }}" required>
    </div>

    <button type="submit" class="btn btn-primary">Actualizar</button>
  </form>
@endsection
