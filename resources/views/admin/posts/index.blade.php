@extends('adminlte::page')

@section('title', 'Grupo Colitas Arequipa')

@section('content_header')
    <h1>Listado de publicaciónes</h1>
@stop

@livewireScripts

@section('content')
    @if (session('info'))
        <div class="alert alert-success alert-dismissable">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
            <strong>{{session('info')}}</strong>
        </div>
    @endif
    @livewire('admin.posts-index')
@stop

