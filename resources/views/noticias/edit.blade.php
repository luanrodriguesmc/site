@extends('app')
@section('content')

<div class="container">
    <ol class="breadcrumb">
        <li><i class="fa fa-map-marker"></i> <a href="{{ action('HomeController@index') }}">Inicio</a></li>
        <li><a href="{{ action('NoticiaController@index') }}">Notícias</a></li>
        <li class="active">Nova Notícia</li>
    </ol>

    @include('errors.list')

    <div class="panel panel-default">
        <div class="panel-heading">Nova Notícia</div>
        <!-- Table -->
        {!! Form::model($noticia, array('route' => array('noticia.update', $noticia->id), 'method' => 'PUT')) !!}
        <div class="panel-body">
            @include('noticias.partials.form')
            <button type="submit" class="btn btn-success pull-right"><i class="fa fa-floppy-o"></i> Salvar</button>
         </div>
         {!! Form::close() !!}
    </div>
</div>
@stop