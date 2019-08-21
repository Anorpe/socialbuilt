<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notificacion extends Model
{
    //
    protected $table = 'notificacions';
    protected $fillable = array('id', 'asunto', 'cuerpo','remitenteisadmin','email','admin');

}
