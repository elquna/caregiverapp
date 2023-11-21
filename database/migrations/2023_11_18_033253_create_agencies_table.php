<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgenciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agencies', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('agency_name')->nullable();
            $table->string('agency_code')->nullable();
            $table->string('business_open_date')->nullable();
            $table->string('address_line_one')->nullable();
            $table->string('address_line_two')->nullable();
            $table->integer('country_id')->nullable();
            $table->integer('state_id')->nullable();
            $table->integer('city_id')->nullable();
            $table->integer('zip')->nullable();
            $table->string('contact_name')->nullable();
            $table->string('contact_email')->nullable();
            $table->string('telephone')->nullable();
            $table->string('default_billing')->nullable();
            $table->string('enable_alert')->default('YES')->comment('YES or NO');
            $table->string('week_start')->comment('sunday,monday,tuesday,wednesday,thursday,friday,saturday')->nullable();;
            $table->string('overtime_alert')->default('YES')->comment('YES or NO');
            $table->string('budget_alert')->default('YES')->comment('YES or NO');
            $table->string('allow_timecard_split')->default('YES')->comment('YES or NO');
            $table->string('clock_in_notification')->default('YES')->comment('YES or NO');
            $table->unsignedDecimal('default_hourly_rate', $precision = 14, $scale = 2)->default(15);
            $table->string('schedule_default_view')->nullable();
            $table->string('popular_shift')->nullable();
            $table->string('live_in')->nullable();
            $table->string('split_snapshot')->nullable();
            $table->string('certification_alert')->nullable();
            $table->string('sort_report_by')->nullable();
            $table->string('job_name_preference')->nullable();
            $table->string('zone_type')->nullable();
            $table->string('default_invoice_type')->nullable();
            $table->string('payroll_period')->nullable();
            $table->string('state_setting')->nullable();
            $table->string('snapshot_based_on')->nullable();
            $table->string('alert_title')->nullable();
            $table->string('alert_details')->nullable();
            $table->string('alert_type')->nullable();
            $table->string('status')->nullable();
            $table->string('threshold_type')->nullable();
            $table->string('threshold_value')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agencies');
    }
}
