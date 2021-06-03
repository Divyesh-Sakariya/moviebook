<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoviepostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movieposts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("t_id");
            $table->unsignedBigInteger("m_id");
            $table->timestamps();
            $table->foreign("t_id")->references("id")->on("theatres")->onDelete('cascade');
            $table->foreign("m_id")->references("id")->on("movie")->onDelete('cascade');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movieposts');
    }
}
