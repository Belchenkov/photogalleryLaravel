@extends('layout.main')

@section('content')
    <div class="callout primary">
        <div class="row column">
            <h1>Upload photo</h1>
            <p class="lead">Upload a photo to the gallery</p>
        </div>
    </div>
    <div class="row small-up-2 medium-up-3 large-up-4">
        <div class="main">
            {!! Form::open( array('action' => 'PhotoController@store', 'enctype' => 'multipart/form-data')) !!}
            {!! Form::label('title', 'Заголовок') !!}
            {!! Form::text('title', $value = null, $attributes = ['placeholder' => 'Заголок фотографии', 'name' => 'title']) !!}

            {!! Form::label('description', 'Описание') !!}
            {!! Form::text('description', $value = null, $attributes = ['placeholder' => 'Описание фотографии', 'name' => 'description']) !!}

            {!! Form::label('description', 'Путь к картинке') !!}
            {!! Form::text('location', $value = null, $attributes = ['placeholder' => 'Путь к картинке', 'name' => 'location']) !!}

            {!! Form::label('image', 'Фотография') !!}
            {!! Form::file('image') !!}

            <input type="hidden" value="{{ $gallery_id }}" name="gallery_id">

            {!! Form::submit('Submit', $attributes = ['class' => 'button']) !!}

            {!! Form::close() !!}
        </div>
    </div>
@stop