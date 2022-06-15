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
        Schema::create('grupo_cidades', function (Blueprint $table) {
            $table->id();
            $table->index('id_cidade');
            $table->unsignedBigInteger('id_cidade')->nullable()->unique();
            $table->foreign('id_cidade')->references('id')->on('cidades')->onDelete('cascade');
            $table->string('nome');
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
        Schema::dropIfExists('grupo_cidades');
    }
};
