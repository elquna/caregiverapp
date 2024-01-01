<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('firstname')->nullable();
            $table->string('middlename')->nullable();
            $table->string('lastname')->nullable();
            $table->string('default_facility')->nullable();
            $table->string('jobname')->nullable();
            $table->string('zone_id')->nullable();
            $table->string('contact_name')->nullable();
            $table->string('intake_date')->nullable();
            $table->string('discharge_date')->nullable();
            $table->string('physician_firstname')->nullable();
            $table->string('physician_lastname')->nullable();
            $table->string('physician_npi')->nullable();
            $table->string('agency_id')->nullable();
            $table->string('user_id')->nullable();
            $table->string('added_by')->nullable();
            $table->string('address_line_1')->nullable();
            $table->string('address_line_2')->nullable();
            $table->string('zip')->nullable();
            $table->string('country_id')->nullable();
            $table->string('state_id')->nullable();
            $table->string('city_id')->nullable();
            $table->string('county')->nullable();
            $table->string('timezone')->nullable();
            $table->string('phone')->nullable();
            $table->string('dob')->nullable();
            $table->string('dob2')->nullable();
            $table->string('gender')->nullable();
            $table->string('ssn')->nullable();
            $table->string('email')->nullable();
            $table->string('workphone')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('members');
    }
}
