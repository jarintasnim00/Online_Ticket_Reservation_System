<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusOwnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bus_owners', function (Blueprint $table) {
            $table->id();
            $table->string('bus_name');
            $table->string('registration_no'); 
            $table->string('bus_owner_name');
            $table->string('bus_owner_mobile_no');
            $table->string('bus_owner_email');
            $table->string('nid');
            $table->string('address');
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
        Schema::dropIfExists('bus_owners');
    }
}
