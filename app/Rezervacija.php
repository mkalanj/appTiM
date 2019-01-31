<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rezervacija extends Model
{
    public $fillable = ['broj_osoba','datum', 'ime_korisnika', 'prezime_korisnika', 'broj_telefona',
        'email_korisnika', 'napomena'];
}
