@extends('app')
@section('content')
<div class="container">
    <ol class="breadcrumb">
        <li><i class="fa fa-map-marker"></i> <a href="{{ action('HomeController@index') }}">Inicio</a></li>
        <li><a href="{{ action('NoticiaController@index') }}">Notícias</a></li>
        <li class="active"><span class="bag-view">Visualizar</span></li>
    </ol>
    @include('errors.list')
    <div class="panel panel-default">
        <div class="panel-heading"><h3 class="panel-title"><strong><span class="bag-view"><i class="fa fa-eye"></i> Visualizar</span> Notícias</strong></h3></div>
        <div class="panel-body">
            {!! Form::model($noticia , array('route' => array('noticia.update', $noticia->id), 'method' => 'PUT')) !!}
            <div class="row">
                <div class="form-group col-md-12">
                    {!! Form::label('indexTitulo','Titulo Página Inicial') !!}
                    <pre>{!! $noticia->indexTitulo !!}</pre>
                </div>
            </div><!-- /row -->
            <div class="row">
                <div class="form-group col-md-12">
                    {!! Form::label('indexDescricao','Descrição Página Inicial') !!}
                    <pre>{!! $noticia->indexDescricao !!}</pre>
                </div>
            </div><!-- /row -->
            <div class="row">
                <div class="form-group col-md-12">
                    {!! Form::label('titulo','Titulo') !!}
                    <pre>{!! $noticia->titulo !!}</pre>
                </div>
            </div><!-- /row -->
            <div class="row">
                <div class="form-group col-md-12">
                    {!! Form::label('descricao','Descrição') !!}
                    <pre>{!! $noticia->descricao !!}</pre>
                </div>
            </div><!-- /row -->
            <div class="row">
                <div class="form-group col-md-2">
                    {!! Form::label('botao','Botão ?') !!}
                    {!! Form::select('botao', array(
                        'S' => 'Sim',
                        'N' => 'Não',
                    ), null, ['class' => 'form-control editable', 'disabled']);
                    !!}
                </div>
                <div class="form-group col-md-2">
                    {!! Form::label('status','Ativo ?') !!}
                    {!! Form::select('status', array(
                        'S' => 'Sim',
                        'N' => 'Não',
                    ), null, ['class' => 'form-control editable', 'disabled']);
                    !!}
                </div>
            </div><!-- row -->
            <hr>
            <div class="row">
                <div class="col-md-12">
                    <div class="btn-group">
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalexcluir">
                            <span class="glyphicon glyphicon-trash"></span> Excluir
                        </button>
                    </div>
                    <div class="pull-right">
                        <div class="btn-group bag-view">
                            <a href="{!! action('NoticiaController@edit', $noticia->id) !!}" class="btn btn-default"><span class="fa fa-pencil-square-o"></span> Editar</a>
                        </div><!-- btn-group bag-view -->
                    </div><!-- pull-right -->
                </div>
            </div><!-- row -->
            {!! Form::close() !!}
        </div><!-- panel-body -->
        <!-- /panel-body -->
    </div><!-- /panel panel-default -->
</div><!-- container -->

    <!-- Modal de exclusão -->
    <div class="modal fade" id="modalexcluir" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Confirma exclusão?</h4>
                </div>
                <div class="modal-body">
                    Você confirma a exclusão do registro?
                </div>
                <div class="modal-footer">
                    <div class="btn-group">
                        <button type="button" class="btn btn-default" data-dismiss="modal"><span
                                class="glyphicon glyphicon-ok"></span> Cancelar
                        </button>
                    </div>
                    <div class="btn-group">
                        {!! Form::open(array('url' => 'noticia/' . $noticia->id)) !!}
                        {!! Form::hidden('_method', 'DELETE') !!}
                        <button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Excluir
                        </button>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function actionFun($i) {
            if ($i == 'e') {
                $('.editable').prop('readonly', false);
                $('.editable').prop('disabled', false);
                $('.bag-view').hide();
                $('.bag-edit').show();
                $('.bag-save').show();
            }
            else {
                $('.editable').prop('readonly', true);
                $('.editable').prop('disabled', true);
                $('.bag-view').show();
                $('.bag-edit').hide();
                $('.bag-save').hide();
            }
        };
    </script>
@stop