@extends('app')
@section('content')

<div class="container">
    <ol class="breadcrumb">
        <li><i class="fa fa-map-marker"></i> <a href="{{ action('HomeController@index') }}">Inicio</a></li>
        <li><a href="{{ action('ClienteController@index') }}">Clientes</a></li>
        <li class="active">Novo Cliente</li>
    </ol>

    @include('errors.list')

    <div class="panel panel-default">
        <div class="panel-heading">Novo Cliente</div>
        {!! Form::open(array('route' => 'cliente.store', 'files' => true)) !!}
        <div class="panel-body">
            @include('clientes.partials.form')
            <button type="submit" class="btn btn-success pull-right"><i class="fa fa-floppy-o"></i> Salvar</button>
        </div>
        {!! Form::close() !!}
    </div>
</div>
@stop