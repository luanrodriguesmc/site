            <div class="row">
                <div class="form-group col-md-12">
                    {!! Form::label('indexTitulo','Titulo Página Inicial') !!}
                    {!! Form::text('indexTitulo',null,['class' => 'form-control editable',  'autocomplete' => 'off', 'required']) !!}
                </div>
            </div><!-- /row -->
            <div class="row">
                <div class="form-group col-md-12">
                    {!! Form::label('indexDescricao','Descrição Página Inicial') !!}
                    {!! Form::textarea('indexDescricao',null,['class' => 'form-control editable',  'autocomplete' => 'off', 'rows' => '4', 'required']) !!}
                </div>
            </div><!-- /row -->
            <div class="row">
                <div class="form-group col-md-12">
                    {!! Form::label('titulo','Titulo') !!}
                    {!! Form::text('titulo',null,['class' => 'form-control editable',  'autocomplete' => 'off', 'required']) !!}
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-12">
                    {!! Form::label('descricao','Descrição') !!}
                    {!! Form::textarea('descricao',null,['class' => 'form-control editable descricao',  'autocomplete' => 'off', 'rows' => '4', 'required']) !!}
                </div>
            </div><!-- /row -->
            <div class="row">
                <div class="form-group col-md-2">
                    {!! Form::label('botao','Botão ?') !!}
                    {!! Form::select('botao', array(
                        'S' => 'Sim',
                        'N' => 'Não',
                    ), null, ['class' => 'form-control editable']);
                    !!}
                </div>
                <div class="form-group col-md-2">
                    {!! Form::label('status','Ativo ?') !!}
                    {!! Form::select('status', array(
                        'S' => 'Sim',
                        'N' => 'Não',
                    ), null, ['class' => 'form-control editable']);
                    !!}
                </div>
                <div class="form-group col-md-2">
                        <label for="icone">Icone <a href="http://fortawesome.github.io/Font-Awesome/icons/#web-application" target="_blank"><i class="fa fa-external-link"></i></a></label>
                        {!! Form::text('icone',null,['class' => 'form-control', 'autocomplete' => 'off', 'required']) !!}
                    </div>
                    <div class="form-group col-md-2">
                        {!! Form::label('cor','Cor') !!}
                        <select id="cor" name="cor" class="form-control" required>
                            <option value="color1" class="color1">Cor 1</option>
                            <option value="color2" class="color2">Cor 2</option>
                            <option value="color3" class="color3">Cor 3</option>
                            <option value="color4" class="color4">Cor 4</option>
                            <option value="color5" class="color5">Cor 5</option>
                            <option value="color6" class="color6">Cor 6</option>
                            <option value="color7" class="color7">Cor 7</option>
                            <option value="color8" class="color8">Cor 8</option>
                            <option value="color9" class="color9">Cor 9</option>
                            <option value="color10" class="color10">Cor 10</option>
                        </select>
                    </div>
            </div><!-- row -->
            <hr>
