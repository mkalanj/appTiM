<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rezervacija extends Model
{
    public $fillable = ['broj_osoba','Datum', 'Vrijeme', 'ime_korisnika', 'przime_korisnika', 'broj telefona',
        'email', 'napomena'];
}
