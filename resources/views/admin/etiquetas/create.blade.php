@extends('adminlte::page')

@section('title', 'Grupo Colitas Arequipa')

@section('content_header')
<h1>Crear etiqueta</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!!Form::open(['route' => 'admin.etiquetas.store']) !!}
                @include('admin.etiquetas.partials.form')

                {!! Form::submit('Crear etiqueta', ['class'=> 'btn btn-success']) !!}
            {!!Form::close([]) !!}
        </div>
    </div>
@stop

@section('js')
    <script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}"></script>

    <script>
    $(document).ready( function() {
        $("#name").stringToSlug({
            setEvents: 'keyup keydown blur',
            getPut: '#slug',
            space: '-'
        });
    });
    </script>
@endsection
