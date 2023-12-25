<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeecertificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employeecertifications', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('employee_id')->nullable();
            $table->string('certificate_date')->nullable();
            $table->string('expiry_date')->nullable();
            $table->text('notes')->nullable();
            $table->text('file')->nullable();
            $table->text('makeinactiveifexpired')->nullable();
            $table->string('addedsecond')->nullable();
            $table->string('name')->nullable();
            $table->string('addedby')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employeecertifications');
    }
}
