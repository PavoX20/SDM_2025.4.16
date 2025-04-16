@extends('layouts.app')

@section('content')
<div class="row justify-content-center mt-5">
    <div class="col-md-6">
        <div class="card shadow-sm border-0">
            <div class="card-body">
                <h2 class="text-center mb-4">Agregar Nuevo Producto</h2>

                <form action="{{ route('productos.store') }}" method="POST">
                    @csrf

                    <div class="form-floating mb-3">
                        <input type="text" id="nombre" name="nombre" class="form-control" required>
                        <label for="nombre">Nombre</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="number" id="precio" name="precio" class="form-control" step="0.01" required>
                        <label for="precio">Precio</label>
                    </div>

                    <div class="form-floating mb-4">
                        <textarea id="descripcion" name="descripcion" class="form-control" style="height: 100px;" required></textarea>
                        <label for="descripcion">Descripción</label>
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary btn-lg">Guardar Producto</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
