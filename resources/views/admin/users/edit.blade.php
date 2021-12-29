@extends('adminlte::page')

@section('title', 'Asignar un rol')

@section('content_header')
<h1>Asignar un rol a un usuario</h1>
@stop

@section('content')
 <div class="card">
     <div class="card-body">
         <p class="h5">Nombre:</p>
         <p class="form-control">{{$user->name}}</p>
         {!! Form::model($user, ['route' => ['admin.users.update', $user], 'method' => 'put']) !!}
         <p class="h5">Listado de Roles:</p>
         @foreach ($roles as $role)
             <div>
                 <label >
                     {!! Form::checkbox('roles[]', $role->id, null, ['class'=> "mr-1"]) !!}
                     {{$role->name}}
                 </label>
             </div>
         @endforeach
         {!! Form::submit('Asignar rol', ['class' => 'btn btn-primary mt-2 float-right']) !!}
         {!! Form::close() !!}
     </div>
 </div>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop
