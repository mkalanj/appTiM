<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class stavke_cjenika extends Model
{
    public $fillable = ['Naziv_stavke_cjenika','Cijena', 'Opis'];
}
