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
        Schema::create('device_issue_category', function (Blueprint $table) {
            $table->id();
            $table->string('name',255)->nullable();

            $table->unsignedBigInteger('brand_id');
            $table->unsignedBigInteger('model_id');

            $table->timestamps();

            $table->foreign('brand_id')->references('id')->on('device_brand'); 
            $table->foreign('model_id')->references('id')->on('device_model'); 
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('device_issue_category');
    }
};
