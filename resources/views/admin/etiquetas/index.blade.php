@extends('adminlte::page')

@section('title', 'Grupo Colitas Arequipa')

@section('content_header')
    @can('admin.etiquetas.create')
        <a href="{{route('admin.etiquetas.create')}}" class="btn btn-success btn-sm float-right">Agregar etiqueta</a>
        @endcan
        <h1>Lista de etiquetas</h1>

    @stop

@section('content')
  @if (session('info'))
  <div class="alert alert-success alert-dismissable">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
      <strong>{{session('info')}}</strong>
  </div>
  @endif

  <div class="card">
      <div class="card-body">
        <table class="table table-striped ">
            <thead class="table-dark">
                <tr class="text-gray-800 border border-b-0">
                    <th class="px-4 py-3">ID</th>
                    <th class="px-4 py-3">Nombre</th>
                    <th class="px-4 py-3" colspan="2"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tags as $tag )
                    <tr class="w-full font-light text-gray-700 bg-gray-100 whitespace-no-wrap border border-b-0">
                        <td class="px-4 py-4">{{$tag->id}}</td>
                        <td class="px-4 py-4">{{$tag->name}}</td>
                        <td width="10px"class="px-4 py-4">
                            @can('admin.etiquetas.edit')
                            <a class="btn btn-primary btn-sm" href="{{route('admin.etiquetas.edit', $tag)}}">Editar</a>
                            @endcan
                        </td>
                        <td width="10px"class="px-4 py-4">
                            @can('admin.etiquetas.destroy')
                            <form action="{{route('admin.etiquetas.destroy', $tag)}}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                            </form>
                            @endcan
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
      </div>

      <div class="card-footer">
          {{$tags->links('pagination::bootstrap-4')}}
      </div>
  </div>

@stop

