@extends('adminlte::page')

@section('title', 'Roles')

@section('content_header')
<a href="{{route('admin.roles.create')}}" class="btn btn-success btn-sm float-right">Agregar nuevo rol</a>
<h1>Lista de Roles</h1>
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
        <table class="table table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Role</th>
                    <th colspan="2"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($roles as $role)
                    <tr>
                        <td>{{$role->id}}</td>
                        <td>{{$role->name}}</td>
                        <td width="10">
                            <a href="{{route('admin.roles.edit',$role)}}" class="btn btn-sm btn-primary">Editar</a>
                        </td>
                        <td width="10">
                            <form action="{{route('admin.roles.destroy',$role)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger" type="submit">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop
