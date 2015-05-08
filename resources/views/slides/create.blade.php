@extends('app')
@section('content')

<div class="container">
    <ol class="breadcrumb">
        <li><i class="fa fa-map-marker"></i> <a href="{{ action('HomeController@index') }}">Inicio</a></li>
        <li><a href="{{ action('SlideController@index') }}">Slides</a></li>
        <li class="active">Novo Slide</li>
    </ol>

    @include('errors.list')

    <div class="panel panel-default">
        <div class="panel-heading">Novo Slide</div>
        <!-- Table -->
        {!! Form::open(array('route' => 'slide.store', 'files' => true)) !!}
        <div class="panel-body">
            @include('slides.partials.form')
            <button type="submit" class="btn btn-success pull-right"><i class="fa fa-floppy-o"></i> Salvar</button>
         </div>
         {!! Form::close() !!}
    </div>
</div>
@stop