<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('version');
            $table->string('players');
            $table->string('controls');
            $table->string('genre');
            $table->string('publisher');
            $table->string('developer');
            $table->string('port')->nullable();
            $table->string('portpublisher')->nullable();
            $table->date('published');
            $table->string('platform');
            $table->decimal('rating', 2,0)->nullable();
            $table->float('price');
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
        Schema::dropIfExists('games');
    }
}
