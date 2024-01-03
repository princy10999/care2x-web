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
        Schema::create('order', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email_id');
            $table->string('mobile_no');
            $table->string('other_city')->nullable();
            $table->integer('extra_payment')->default(0);
            $table->string('issue');
            $table->string('address');

            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('brand_id');
            $table->unsignedBigInteger('model_id');
            $table->unsignedBigInteger('device_issue_category_id');
            $table->unsignedBigInteger('city');
            $table->unsignedBigInteger('status');

            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users'); 
            $table->foreign('brand_id')->references('id')->on('device_brand'); 
            $table->foreign('model_id')->references('id')->on('device_model'); 
            $table->foreign('device_issue_category_id')->references('id')->on('device_issue_category'); 
            $table->foreign('city')->references('id')->on('city'); 
            $table->foreign('status')->references('id')->on('order_status'); 
            
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
        Schema::dropIfExists('order');
    }
};
