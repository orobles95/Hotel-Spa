<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model {

    protected $table = 'empleados';
    protected $primaryKey = 'dniEmp';
    public $timestamps = false;

}
