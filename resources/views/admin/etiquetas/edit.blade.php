@extends('adminlte::page')

@section('title', 'Grupo Colitas Arequipa')

@section('content_header')
  <h1>Editar etiqueta</h1>
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
            {!!Form::model($etiqueta, ['route' => ['admin.etiquetas.update',$etiqueta], 'method' => 'put']) !!}
                @include('admin.etiquetas.partials.form')
                {!! Form::submit('Actualizar etiqueta', ['class'=> 'btn btn-success']) !!}
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
