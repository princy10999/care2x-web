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
        Schema::create('device_model', function (Blueprint $table) {
            $table->id();
            $table->string('name',255)->nullable();

            $table->unsignedBigInteger('brand_id');

            $table->timestamps();
            $table->softDeletes();
            
            $table->foreign('brand_id')->references('id')->on('device_brand'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('device_model');
    }
};
