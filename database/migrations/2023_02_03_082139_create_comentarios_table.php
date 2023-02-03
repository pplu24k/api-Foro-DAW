<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comentarios', function (Blueprint $table) {
            $table->id();

            $table->text("contenido");

            $table->unsignedBigInteger("usuario_id");
            $table->foreign("usuario_id")->references("id")->on("users")->onUpdate("cascade")->onDelete("cascade");


            $table->unsignedBigInteger("hilo_id");
            $table->foreign("hilo_id")->references("id")->on("hilos")->onUpdate("cascade")->onDelete("cascade");




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
        Schema::dropIfExists('comentarios');
    }
};
