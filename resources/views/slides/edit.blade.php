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
        {!! Form::model($slide, array('route' => array('slide.update', $slide->id), 'method' => 'PUT', 'files' => true)) !!}

        <div class="panel-body">
            <div class="row">
                <div class="form-group col-md-10">
                    {!! Form::label('titulo','Titulo') !!}
                    {!! Form::text('titulo',null,['class' => 'form-control', 'autocomplete' => 'off', 'required']) !!}
                </div>
                <div class="form-group col-md-2">
                    {!! Form::label('arquivo','Imagem') !!}
                    {!! Form::file('arquivo', ['class' => 'form-control filestyle', 'required', 'data-input' => 'false', 'data-buttonText' => 'Selecionar']) !!}
                </div>
            </div>
            <!-- /row -->

            <div class="row">
                <div class="form-group col-md-12">
                    {!! Form::label('descricao','Descrição') !!}
                    {!! Form::textarea('descricao',null,['class' => 'form-control', 'id' => 'descricao', 'rows' => '6', 'autocomplete' => 'off', 'required']) !!}
                </div>
            </div>
            <!-- /row -->
            <div class="row">

                <div class="form-group col-md-2">
                    {!! Form::label('ordem','Ordem') !!}
                    {!! Form::number('ordem',null,['class' => 'form-control',  'autocomplete' => 'off', 'required']) !!}
                </div>

                <div class="form-group col-md-2">
                    {!! Form::label('botao','Botão ?') !!}
                    {!! Form::select('botao', array(
                        'S' => 'Sim',
                        'N' => 'Não',
                    ), null, ['class' => 'form-control']);
                    !!}
                </div>
                <div class="form-group col-md-6">
                        {!! Form::label('botaoUrl','Link do Botão ?') !!}
                        {!! Form::url('botaoUrl',null,['class' => 'form-control', 'autocomplete' => 'off']) !!}
                    </div>
                <div class="form-group col-md-2">
                    {!! Form::label('status','Ativo ?') !!}
                    {!! Form::select('status', array(
                        'S' => 'Sim',
                        'N' => 'Não',
                    ), null, ['class' => 'form-control']);
                    !!}
                </div>
            </div>
            <button type="submit" class="btn btn-success pull-right"><i class="fa fa-floppy-o"></i> Salvar</button>
         </div>
         {!! Form::close() !!}
    </div>
</div>
@stop