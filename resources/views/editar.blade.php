@extends('layouts.app')

@section('content')
<div class="row justify-content-center mt-5">
    <div class="col-md-6">
        <div class="card shadow-sm border-0">
            <div class="card-body">
                <h2 class="text-center mb-4">Editar Artículo</h2>

                <form action="{{ route('productos.update', $producto->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="form-floating mb-3">
                        <input type="text" name="nombre" id="nombre" class="form-control" value="{{ $producto->nombre }}" required>
                        <label for="nombre">Nombre</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="number" step="0.01" name="precio" id="precio" class="form-control" value="{{ $producto->precio }}" required>
                        <label for="precio">Precio</label>
                    </div>

                    <div class="form-floating mb-4">
                        <input type="text" name="descripcion" id="descripcion" class="form-control" value="{{ $producto->descripcion }}">
                        <label for="descripcion">Descripción</label>
                    </div>

                    <div class="d-flex justify-content-between">
                        <a href="{{ route('productos.index') }}" class="btn btn-secondary">Cancelar</a>
                        <button type="submit" class="btn btn-success">Guardar Cambios</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
