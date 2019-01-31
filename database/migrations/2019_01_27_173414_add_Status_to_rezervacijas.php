<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddStatusToRezervacijas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::table('rezervacijas', function (Blueprint $table) {
                        $table->string('Status')->default('Na cekanju');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('rezervacijas', function (Blueprint $table) {
                    $table->dropColumn('Status');

        });
    }
}

