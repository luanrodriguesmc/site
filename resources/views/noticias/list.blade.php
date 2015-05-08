@extends('app')
@section('content')

<div class="container">
<ol class="breadcrumb">
    <li><i class="fa fa-map-marker"></i> <a href="{{ action('HomeController@index') }}">Inicio</a></li>
    <li class="active">Notícias</li>
</ol>

@include('errors.list')

<div class="row">
    <div class="col-md-12">
        <div class="pull-right">
            <form class="form-inline">
                <a href="{!! action('NoticiaController@create') !!}" class="btn btn-default btn-sm">
                    <span class="glyphicon glyphicon-plus"></span> Nova Notícia
                </a>
            </form>
        </div>
    </div>
</div>

<hr>

<div class="panel panel-default">
    <!-- Default panel contents -->
    <div class="panel-heading">Noticias</div>
    <!-- Table -->
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-condensed">
            <colgroup>
                <col class="col-xs-11">
                <col class="col-xs-1">
            </colgroup>
            <thead>
            <tr>
                <th class="lr-v-middle">Titulo</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach ($noticias as $noticia)
            <tr>
                <td class="lr-v-middle">{{ $noticia->indexTitulo }}</td>
                <td class="lr-v-middle text-center">
                    <div class="btn-group">
                        <a href="{{ route('noticia.show', $noticia->id) }}" onclick="showLoad()" class="btn btn-sm btn-default"><span class="fa fa-search"></span></a>
                    </div>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>

{!! $noticias->render() !!}

<!-- Modal -->
<div class="modal fade" id="new" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            {!! Form::open(array('route' => 'noticia.store')); !!}
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Nova Noticia</h4>
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