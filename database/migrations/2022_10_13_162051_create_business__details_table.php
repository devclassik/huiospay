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
            $table->string('type_of_terminal')->nullable();
            $table->string('features_needed')->nullable();
            $table->string('no_terminal_needed');
            $table->string('payment_type')->nullable();
            $table->string('business_state')->nullable();
            $table->string('business_address')->nullable();
            $table->string('state_location')->nullable();
            $table->string('main_business_person_name')->nullable();
            $table->string('main_business_person_email')->nullable();
            $table->string('main_business_person_tel')->nullable();
            $table->string('owner_business_person_name')->nullable();
            $table->string('owner_business_person_email')->nullable();
            $table->string('owner_business_person_tel')->nullable();
            $table->string('image_path')->nullable();
            $table->string('new_merchant_legal_name')->nullable();
            $table->string('new_store_name')->nullable();
            $table->string('highest_no_transaction');
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
