@extends('adminlte::page')

@section('title', 'Roles')

@section('content_header')
<h1>Crear nuevo rol</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        {!! Form::open(['route' => 'admin.roles.store', 'class' => 'form-group']) !!}
        @include('admin.roles.partials.form')
        {!! Form::submit('Crear rol', ['class' => 'mt-3 btn btn-primary float-right']) !!}
        {!! Form::close() !!}
    </div>
</div>
@stop

