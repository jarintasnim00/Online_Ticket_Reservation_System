<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusinfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('businfos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('bustyp_id');
            $table->foreign('bustyp_id')
                    ->references('id')
                    ->on('bustypes')
                    ->onDelete('cascade');  
            $table->string('leaving_from');
            $table->string('going_to');
            $table->string('name');
            $table->string('seattype');
            $table->string('seatcapacity'); 
            $table->string('fare');
            $table->string('day');
            $table->string('description');
            $table->softdeletes(); 
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
        Schema::dropIfExists('businfos');
    }
}
