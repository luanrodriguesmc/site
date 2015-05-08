
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
    <div class="form-group col-md-2">
        {!! Form::label('botaoTexto','Texto do Botão ?') !!}
        {!! Form::url('botaoTexto',null,['class' => 'form-control', 'autocomplete' => 'off']) !!}
    </div>
    <div class="form-group col-md-4">
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