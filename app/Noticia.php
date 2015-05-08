<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Noticia extends Model {

    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public $errors;
    protected $table = 'noticias';
    protected $fillable = ['slug', 'indexTitulo', 'indexDescricao', 'titulo', 'descricao', 'botao', 'cor', 'icone', 'status'];



}
