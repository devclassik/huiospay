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
        Schema::create('business__details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_Id')->references('id')->on('account_setups');
            $table->string('business_type');
            $table->string('type_of_terminal');
            $table->string('features_needed');
            $table->string('no_terminal_needed');
            $table->string('payment_type');
            $table->string('business_state');
            $table->string('business_address');
            $table->string('state_location')->nullable();
            $table->string('main_business_person_name');
            $table->string('main_business_person_email');
            $table->string('main_business_person_tel');
            $table->string('owner_business_person_name');
            $table->string('owner_business_person_email');
            $table->string('owner_business_person_tel');
            $table->string('image_path');
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
        Schema::dropIfExists('business__details');
    }
};
