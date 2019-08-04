<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Habitante extends Authenticatable
{

    protected $table = 'habitantes';
    protected $fillable = array('idpropiedad', 'telefono', 'celular','password');
    //protected $primary_key = 'idpropiedad';
    protected $primaryKey = "idpropiedad";
    public $incrementing = false;

    public function isAdmin(){
        return $this->email == 'admin@admin';
    }
}
