@extends('layout.main')

@section('content')
    <div class="callout primary">
        <div class="row column">
            <h1>Создание фотогаллереи</h1>
            <p class="lead">Create a gallery and start uploading</p>
        </div>
    </div>
    <div class="row small-up-2 medium-up-3 large-up-4">
        <div class="main">
            {!! Form::open( array('action' => 'GalleryController@store', 'enctype' => 'multipart/form-data')) !!}
                {!! Form::label('name', 'Название') !!}
                {!! Form::text('name', $value = null, $attributes = ['placeholder' => 'Название галлерии', 'name' => 'name']) !!}

                {!! Form::label('description', 'Описание') !!}
                {!! Form::text('name', $value = null, $attributes = ['placeholder' => 'Описание галлерии', 'name' => 'description']) !!}

                {!! Form::label('cover_image', 'Обложка') !!}
                {!! Form::file('cover_image') !!}

                {!! Form::submit('Submit', $attributes = ['class' => 'button']) !!}

            {!! Form::close() !!}
        </div>
    </div>
@stop