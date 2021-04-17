<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTripcostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tripcosts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('businfo_id');
            $table->foreign('businfo_id')
                    ->references('id')
                    ->on('businfos')
                    ->onDelete('cascade');  
            $table->unsignedBigInteger('bookseat_id');
            $table->foreign('bookseat_id')
                    ->references('id')
                    ->on('booked_seats')
                    ->onDelete('cascade');
            $table->string('fuel');
            $table->string('price_per_liter');
            $table->string('toll_cost');
            $table->string('maintenance');
            $table->string('driver_salary'); 
            $table->string('helper_salary');
            $table->string('supervisor_salary');
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
        Schema::dropIfExists('tripcosts');
    }
}
