<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pacient extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
    */
    protected $fillable = [
        'age',
        'sex',
        'comorbidity_patology_hypertensive',
        'comorbidity_diabetes',
        'comorbidity_coronary_disease',
        'comorbidity_immunosuppression',
        'comorbidity_chronic_lung_disease',
        'comorbidity_gestation',
        'complaint_fever',
        'complaint_cough',
        'complaint_dyspnea',
        'complaint_headache',
        'complaint_diarrhea',
        'complaint_myalgia',
        'temperature',
        'heart_rate',
        'resperatory_rate',
        'systolic_blood_pressure',
        'oxygen_saturation',
    ];
}
