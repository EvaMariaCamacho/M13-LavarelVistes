<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
             $table->string('name');
            $table->string('apelllido');
            $table->string('email');
            $table->string('telefono');
            $table->string('ciudad');
            $table->unsignedBigInteger('users_id')->nullable();
            $table->foreign('users_id')
                    ->references('id')
                    ->on('users')
                    ->onDelete('set null');
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
        Schema::dropIfExists('clientes');
    }
}
