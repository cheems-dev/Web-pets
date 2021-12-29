<div class="form-group">
    {!! Form::label('name', 'Nombre') !!}
    {!! Form::text('name', null, ['class' => 'form-control','placeholder' => 'Ingrese el nombre de la posts']) !!}
    @error('name')
    <span class="text-danger">{{$message}}</span>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('slug', 'Slug') !!}
    {!! Form::text('slug', null, ['class' => 'form-control','placeholder' => 'Ingrese el slug de la etiqueta',
    'readonly']) !!}
    @error('slug')
    <span class="text-danger">{{$message}}</span>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('category_id', 'Categoría') !!}
    {!! Form::select('category_id', $categories, null,['class' => 'form-control']) !!}
    @error('category_id')
    <span class="text-danger">{{$message}}</span>
    @enderror
</div>

<div class="form-group">
   <p class="font-weight">Etiquetas:</p>
   @foreach ($tags as $tag)
    <label class="mr-2">
        {!! Form::checkbox('tags[]', $tag->id, null) !!}
        {{$tag->name}}
    </label>
   @endforeach
   @error('tags')
   <br>
    <span class="text-danger">{{$message}}</span>
    @enderror
</div>

<div class="row">
    <div class="col mb-3">
        <div class="image-wrapper">
            @isset ($post->image)
            <img id="picture" src="{{Storage::url($post->image->url)}}">
            @else
            <img id="picture"
                src="https://media.istockphoto.com/photos/a-small-dog-and-a-kitten-sleep-at-home-picture-id1265884839?b=1&k=20&m=1265884839&s=170667a&w=0&h=_YdS6fYeJbghZJY4wkqd6wc68yfkYfUZKnnzOjFGIB0="
                alt="">
            @endisset
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            {!! Form::label('file', 'Imagen del producto') !!}
            {!! Form::file('file', ['class' => 'form-control-file', 'accept' => 'image/*']) !!}
            @error('file')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    </div>
</div>

<div class="form-group">
    <p class="font-weight-bold">Estado:</p>
    <label class="mr-2">
        {!! Form::radio('status', 1, true) !!}
        Borrador
    </label>
    <label class="mr-2">
        {!! Form::radio('status', 2, false) !!}
        Publicado
    </label>
    @error('status')
    <span class="text-danger">{{$message}}</span>
    @enderror
</div>

<div class="form-group">
   {!! Form::label('extract', 'Extracto: ') !!}
   {!! Form::textarea('extract', null, ['class' => 'form-control']) !!}

   @error('extract')
    <span class="text-danger">{{$message}}</span>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('body', 'Cuerpo del post: ') !!}
    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
    @error('body')
    <span class="text-danger">{{$message}}</span>
    @enderror
</div>
