<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suscrito extends Model {

    protected $table = 'suscritos';
    protected $primaryKey = 'idSuscrito';
    public $timestamps = false;

}
