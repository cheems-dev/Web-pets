<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;

use function PHPSTORM_META\map;

class TagController extends Controller
{

    public function __construct()
    {
        $this->middleware('can:admin.etiquetas.index')->only('index');
        $this->middleware('can:admin.etiquetas.create')->only('create', 'store');
        $this->middleware('can:admin.etiquetas.edit')->only('edit', 'update');
        $this->middleware('can:admin.etiquetas.destroy')->only('destroy');
    }
    protected $paginationTheme = "bootstrap";

    public function index()
    {
        $tags = Tag::latest('id')
            ->paginate(6);

        return view('admin.etiquetas.index', compact('tags'));
    }

    public function create()
    {
        $colors = [
            'red' => 'Color rojo',
            'yellow' => 'Color amarillo',
            'green' => 'Color verde',
            'blue' => 'Color azul',
            'indigo' => 'Color indigo',
            'purple' => 'Color morado',
            'pink' => 'Color rosado',
        ];
        return view('admin.etiquetas.create', compact('colors'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required|unique:tags',
            'color' => 'required',
        ]);
        $etiqueta = Tag::create($request->all());

        return redirect()->route('admin.etiquetas.edit', compact('etiqueta'))->with('info', 'Etiqueta creada correctamente !!!');
    }

    public function edit(Tag $etiqueta)
    {
        $colors = [
            'red' => 'Color rojo',
            'yellow' => 'Color amarillo',
            'green' => 'Color verde',
            'blue' => 'Color azul',
            'indigo' => 'Color indigo',
            'purple' => 'Color morado',
            'pink' => 'Color rosado',
        ];
        return view('admin.etiquetas.edit', compact('etiqueta', 'colors'));
    }

    public function update(Request $request, Tag $etiqueta)
    {
        $request->validate([
            'name' => 'required',
            'slug' => "required|unique:tags,slug,$etiqueta->id",
            'color' => 'required',
        ]);

        $etiqueta->update($request->all());

        return redirect()->route('admin.etiquetas.edit', $etiqueta)->with('info', 'Etiqueta actualizada correctamente!!!');
    }

    public function destroy(Tag $etiqueta)
    {
        $etiqueta->delete();

        return redirect()->route('admin.etiquetas.index')->with('info', 'Etiqueta elimanada correctamente');
    }
}
