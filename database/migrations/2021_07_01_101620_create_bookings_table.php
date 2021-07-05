<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('clientes_id')->nullable();
            $table->foreign('clientes_id')
                    ->references('id')
                    ->on('clientes')
                    ->onDelete('set null');
            $table->string('habitacion');
            $table->string('ocupacion');
            $table->timestamp('entrada');
            $table->timestamp('salida');
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
        Schema::dropIfExists('bookings');
    }
}
