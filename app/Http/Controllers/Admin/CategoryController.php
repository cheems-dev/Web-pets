<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function __construct()
    {
        $this->middleware('can:admin.categorias.index')->only('index');
        $this->middleware('can:admin.categorias.create')->only('create', 'store');
        $this->middleware('can:admin.categorias.edit')->only('edit', 'update');
        $this->middleware('can:admin.categorias.destroy')->only('destroy');
    }

    public function index()
    {
        $categories = Category::all();
        return view('admin.categorias.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.categorias.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required|unique:categories',
        ]);
        $categoria = Category::create($request->all());

        return redirect()->route('admin.categorias.edit', $categoria)->with('info', 'Categoría creada correctamente');
    }

    public function edit(Category $categoria)
    {
        return view('admin.categorias.edit', compact('categoria'));
    }

    public function update(Request $request, Category $categoria)
    {
        $request->validate([
            'name' => 'required',
            'slug' => "required|unique:categories,slug, $categoria->id",
        ]);

        $categoria->update($request->all());

        return redirect()->route('admin.categorias.edit', $categoria)->with('info', 'Categoría actualizada correctamente');
    }

    public function destroy(Category $categoria)
    {
        $categoria->delete();

        return redirect()->route('admin.categorias.index')->with('info', 'Categoría eliminada correctamente');
    }
}
