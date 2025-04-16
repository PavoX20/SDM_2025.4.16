<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;


class EdicionProductos
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos = Producto::all(); // Obtener todos los productos
    return view('articulos', compact('productos')); // Pasarlos a la vista
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
{
    return view('crear');
}


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'nombre' => 'required|string|max:255',
            'precio' => 'required|numeric',
            'descripcion' => 'nullable|string',
        ]);

        // Crear un nuevo producto
        Producto::create($request->all());

        // Redirigir a la lista de productos con un mensaje de éxito
        return redirect()->route('productos.index')->with('success', 'Producto creado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
{
    return redirect()->route('productos.index');
}


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
{
    $producto = Producto::findOrFail($id);
    return view('editar', compact('producto'));
}


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    $producto = Producto::findOrFail($id);

    // Puedes hacer validación aquí si deseas
    $producto->update([
        'nombre' => $request->input('nombre'),
        'precio' => $request->input('precio'),
        'descripcion' => $request->input('descripcion'),
    ]);

    return redirect()->route('productos.index')
        ->with('success', 'Producto actualizado correctamente.');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $producto = Producto::findOrFail($id);
        $producto->delete();
    
        return redirect()->route('productos.index')
            ->with('success', 'Producto eliminado correctamente.');
    }
    
}
