@extends('adminlte::page')

@section('title', 'Roles')

@section('content_header')
<h1>Editar Rol</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        {!! Form::model($role,['route' => ['admin.roles.update', $role], 'method' => 'put', 'class' => 'form-group']) !!}
            @include('admin.roles.partials.form')
        {!! Form::submit('Actualizar rol', ['class' => 'mt-3 btn btn-primary float-right']) !!}
        {!! Form::close() !!}
    </div>
</div>
@stop
