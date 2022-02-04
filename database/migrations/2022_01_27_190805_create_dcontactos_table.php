<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDcontactosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dcontactos', function (Blueprint $table) {
            $table->id();
            $table->string('telefono')->nullable();
            $table->string('telefono_contacto')->nullable();
            $table->foreignId('estado_id')->references('id')->on('estados')->comment('Estados');
            $table->string('municipio')->nullable();
            $table->string('colonia')->nullable();
            $table->string('calle')->nullable();
            $table->string('numero')->nullable();
            $table->string('cp')->nullable();
            $table->string('fb')->nullable();
            $table->string('twitter')->nullable();
            $table->foreignId('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('dcontactos');
    }
}
