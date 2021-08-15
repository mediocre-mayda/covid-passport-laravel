<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVacRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vac_records', function (Blueprint $table) {
            $table->id();
            $table->text('nid');
			$table->datetime('dob')->nullable();
			$table->string('gender', 11)->nullable();
			$table->tinyInteger('is_libyan')->nullable();
			$table->string('phone', 11)->nullable();
			$table->text('passport')->nullable();
			$table->text('city')->nullable();
			$table->text('address');
			$table->tinyInteger('has_first_dose')->nullable();
			$table->datetime('first_dose_date')->nullable();
			$table->text('first_dose_type');
			$table->integer('first_dose_clinic_id')->nullable();
			$table->tinyInteger('has_second_dose')->nullable();
			$table->datetime('second_dose_date')->nullable();
			$table->text('second_dose_type');
			$table->integer('second_dose_clinic_id')->nullable();
			$table->integer('has_qr')->nullable();
			$table->integer('created_by')->nullable();
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
        Schema::dropIfExists('vac_records');
    }
}
