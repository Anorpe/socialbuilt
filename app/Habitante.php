<?php

namespace App;

use Illuminate\Database\Eloquent\Model;



class Habitante extends Model
{

    protected $table = 'habitantes';
    protected $fillable = array('idpropiedad', 'telefono', 'celular','contraseña');
    //protected $primary_key = 'idpropiedad';
    protected $primaryKey = "idpropiedad";
    public $incrementing = false;

    public function isAdmin(){
        return $this->email == 'admin@admin';
    }
}
