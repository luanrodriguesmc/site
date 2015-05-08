<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cliente extends Model {

    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public $errors;
    protected $table = 'clientes';
    protected $fillable = ['nome','imgUrl', 'status'];
}
