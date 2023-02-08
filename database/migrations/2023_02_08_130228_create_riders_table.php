<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('riders', function (Blueprint $table) {
            $table->id();
            $table->string('name', 200);
            $table->string('email', 200);
            $table->string('phone', 50);
            $table->string('password', 300);
            $table->string('age', 10);
            $table->string('gender', 20);
            $table->string('district', 100);
            $table->string('thana', 100);
            $table->string('present_address', 250);
            $table->string('permanent_address', 250);
            $table->string('education', 100);
            $table->string('occupation', 250);
            $table->string('marital_status', 20)->nullable();
            $table->string('motorcycle_ride', 20);
            $table->string('smart_phone_map', 20);
            $table->string('passport_validity', 20);
            $table->string('email_verified_at', 20);
            $table->string('profile_pic', 250)->nullable();
            $table->string('tracking_code', 100);
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
        Schema::dropIfExists('riders');
    }
}
