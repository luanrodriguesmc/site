@extends('app')
@section('content')

<div class="container">
<ol class="breadcrumb">
    <li><i class="fa fa-map-marker"></i> <a href="{{ action('HomeController@index') }}">Inicio</a></li>
    <li class="active">Clientes</li>
</ol>

@include('errors.list')

<div class="row">
    <div class="col-md-12">
        <div class="pull-right">
            <form class="form-inline">
                <a href="{!! action('ClienteController@create') !!}" class="btn btn-default btn-sm">
                    <span class="glyphicon glyphicon-plus"></span> Novo Cliente
                </a>
            </form>
        </div>
    </div>
</div>

<hr>

<div class="panel panel-default">
    <!-- Default panel contents -->
    <div class="panel-heading">Clientes</div>
    <!-- Table -->

    <div class="panel-body">
        @foreach ($clientes as $cliente)
            <div class="col-md-3 text-center">
                <p>
                    <img src="{!! asset('assets/img/'.$cliente->imgUrl) !!}" class="img-responsive img-thumbnail" >
                </p>
                <div class="btn-group">

                    {!! Form::open(array('url' => 'cliente/' . $cliente->id)) !!}
                    {!! Form::hidden('_method', 'DELETE') !!}
                    <a href="" class="btn btn-default">
                        <i class="fa fa-pencil"></i>
                    </a>
                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                    {!! Form::close() !!}
                </div>
            </div><!-- /col-md-3 -->
        @endforeach
    </div>

</div>

{!! $clientes->render() !!}

<!-- Modal -->
<div class="modal fade" id="new" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            {!! Form::open(array('route' => 'cliente.store')); !!}
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Novo Cliente</h4>
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