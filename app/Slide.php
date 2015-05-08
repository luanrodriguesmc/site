<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Slide extends Model {
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public $errors;
    protected $table = 'slides';
    protected $fillable = ['titulo', 'descricao', 'imgUrl', 'botao', 'botaoUrl', 'botaoTexto', 'ordem', 'status'];
}