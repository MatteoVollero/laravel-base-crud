<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Inserisco la modifica da fare in questo caso vogliamo rendere unique isbn
        Schema::table('books', function (Blueprint $table)
        {

            $table->string('isbn', 50)->unique()->change();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     //Funzione chiamata duranta una rollback
    public function down()
    {

      Schema::table('books', function(Blueprint $table)
      {

          $table->dropUnique('isbn');

      });

    }
}
