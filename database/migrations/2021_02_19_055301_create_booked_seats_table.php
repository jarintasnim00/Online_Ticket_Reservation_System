<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookedSeatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booked_seats', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('businfo_id');
            $table->foreign('businfo_id')
                    ->references('id')
                    ->on('businfos')
                    ->onDelete('cascade'); 
            $table->date('date');
            $table->string('time');
            $table->boolean('status', 1)->default(0);
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
        Schema::dropIfExists('booked_seats');
    }
}
