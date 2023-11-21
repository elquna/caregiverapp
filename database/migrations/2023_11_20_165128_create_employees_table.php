<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('user_id')->nullable();
            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable();
            $table->string('email')->unique();
            $table->integer('agency_id')->nullable();
            $table->integer('zone_id')->nullable();
            $table->string('skilled_or_noneskilled')->nullable();
            $table->string('gender')->nullable();
            $table->string('current_status')->nullable();
            $table->string('address_line')->nullable();
            $table->string('address_line_two')->nullable();
            $table->string('zip')->nullable();
            $table->string('country')->nullable();
            $table->string('timezone')->nullable();
            $table->string('country_id')->nullable();
            $table->string('state_id')->nullable();
            $table->string('city_id')->nullable();
            $table->string('addedsecond')->nullable();
            $table->string('language')->nullable();
            $table->string('clockoutsafeguard')->nullable();
            $table->string('zip')->nullable();
            $table->string('hire_date')->nullable();
            $table->string('dob')->nullable();
            $table->string('ssn')->nullable();
            $table->string('pay_rate')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
