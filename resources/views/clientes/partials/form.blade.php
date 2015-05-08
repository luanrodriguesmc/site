<div class="row">
    <div class="form-group col-md-4">
        {!! Form::label('nome','Nome do Cliente') !!}
        {!! Form::text('nome',null,['class' => 'form-control',  'autocomplete' => 'off', 'required']) !!}
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('arquivo','Imagem') !!}
        {!! Form::file('arquivo', ['class' => 'form-control filestyle', 'required', 'data-input' => 'true', 'data-buttonText' => 'Selecionar']) !!}
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
<!-- /row -->