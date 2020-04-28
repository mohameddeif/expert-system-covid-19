<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacients', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('age');
            $table->char('sex', 1);
            $table->boolean('comorbidity_patology_hypertensive')->nullable();
            $table->boolean('comorbidity_diabetes')->nullable();
            $table->boolean('comorbidity_coronary_disease')->nullable();
            $table->boolean('comorbidity_immunosuppression')->nullable();
            $table->boolean('comorbidity_chronic_lung_disease')->nullable();
            $table->boolean('comorbidity_gestation')->nullable();
            $table->boolean('complaint_fever')->nullable();
            $table->boolean('complaint_cough')->nullable();
            $table->boolean('complaint_dyspnea')->nullable();
            $table->boolean('complaint_headache')->nullable();
            $table->boolean('complaint_diarrhea')->nullable();
            $table->boolean('complaint_myalgia')->nullable();
            $table->bigInteger('temperature')->nullable();
            $table->bigInteger('heart_rate')->nullable();
            $table->bigInteger('resperatory_rate')->nullable();
            $table->bigInteger('systolic_blood_pressure')->nullable();
            $table->bigInteger('oxygen_saturation')->nullable();
            $table->bigInteger('gravity')->nullable();

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
        Schema::dropIfExists('pacients');
    }
}
