@extends('app')
@section('content')

<div class="container">
<ol class="breadcrumb">
    <li><i class="fa fa-map-marker"></i> <a href="{{ action('HomeController@index') }}">Inicio</a></li>
    <li class="active">Slides</li>
</ol>

@include('errors.list')

<div class="row">
    <div class="col-md-12">
        <div class="pull-right">
            <form class="form-inline">
                <a href="{!! action('SlideController@create') !!}" class="btn btn-default btn-sm">
                    <span class="glyphicon glyphicon-plus"></span> Novo Slide
                </a>
            </form>
        </div>
    </div>
</div>

<hr>

<div class="panel panel-default">
    <!-- Default panel contents -->
    <div class="panel-heading">Slides</div>
    <!-- Table -->
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-condensed">
            <colgroup>
                <col class="col-xs-1">
                <col class="col-xs-9">
                <col class="col-xs-1">
                <col class="col-xs-1">
            </colgroup>
            <thead>
            <tr>
                <th class="lr-v-middle text-center">Código</th>
                <th class="lr-v-middle">Nome</th>
                <th class="lr-v-middle text-center">Ordem</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach ($slides as $slide)
            <tr>
                <td class="lr-v-middle text-center">{{ $slide->id }}</td>
                <td class="lr-v-middle">{{ $slide->titulo }}</td>
                <td class="lr-v-middle text-center">{{ $slide->ordem }}</td>
                <td class="lr-v-middle text-center">
                    <div class="btn-group">
                        <a href="{{ route('slide.show', $slide->id) }}" onclick="showLoad()" class="btn btn-sm btn-default"><span class="fa fa-search"></span></a>
                    </div>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>

{!! $slides->render() !!}

<!-- Modal -->
<div class="modal fade" id="new" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            {!! Form::open(array('route' => 'slide.store')); !!}
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Novo slide</h4>
            </div>
            <div class="panel-body">

            </div><!-- /panel-body -->
            <div class="modal-footer">
                <button type="button" class="btn btn-warning" data-dismiss="modal"><span class="fa fa-ban"></span> Cancelar</button>
                <button type="submit" class="btn btn-success"><span class="fa fa-floppy-o"></span> Salvar</button>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
</div>
@stop