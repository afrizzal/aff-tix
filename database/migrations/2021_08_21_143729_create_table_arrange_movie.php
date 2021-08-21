<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableArrangeMovie extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_arrange_movie', function (Blueprint $table) {
            $table->id();
            $table->foreignId('theater_id')->constrained('theaters')->onDelete('cascade');
            $table->foreignId('movie_id')->constrained('movies')->onDelete('cascade');
            $table->string('studio');
            $table->integer('price');
            $table->json('seats');
            $table->json('schedules');
            $table->enum('status', ['coming soon', 'in theater', 'finish']);
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
        Schema::dropIfExists('table_arrange_movie');
    }
}
