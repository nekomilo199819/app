<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /*** Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('cod_usuario');
            $table->string('cedula')->unique();
            $table->text('nombres');
            $table->text('apellidos');
            $table->string('direccion');
            $table->string('telefono');
            $table->string('email')->unique();
            $table->string('contraseña');
            $table->integer('rol_por_usuario');
            //Token ingreso para externos
            $table->string('api_token')->nullable()->unique(); //ni idea xd
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
