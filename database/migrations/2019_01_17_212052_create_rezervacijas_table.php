<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRezervacijasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rezervacijas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('broj_osoba');
            $table->string('ime_korisnika');
            $table->string('prezime_korisnika');
            $table->string('broj_telefona');
            $table->string('email_korisnika');
            $table->string('napomena');
            $table->boolean('status_rezervacije')->default(false)->change();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rezervacijas');
    }
}
