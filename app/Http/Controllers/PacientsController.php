<?php

namespace App\Http\Controllers;

use App\Pacient;
use Illuminate\Http\Request;

class PacientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'age' => 'required|numeric',
            'sex' => 'required',
        ]);
        $pacient = [];
        foreach ($request->except('_token','age','sex') as $key => $value) {
            $pacient[$key] = true;
        }


        $pacient['age'] = $request->age;
        $pacient['sex'] = $request->sex;
        Pacient::create($pacient);
        
        return redirect()->back();
        
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function results()
    {
        $pacients = Pacient::all();

        $comorbidities = 0;

        $gravity = 0;

        foreach ($pacients as $key => $pacient) {

            if($pacient->comorbidity_patology_hypertensive){
                $comorbidities++;
            }
            if($pacient->comorbidity_diabetes){
                $comorbidities++;
            }
            if($pacient->comorbidity_coronary_disease){
                $comorbidities++;
            }
            if($pacient->comorbidity_immunosuppression){
                $comorbidities++;
            }
            if($pacient->comorbidity_chronic_lung_disease){
                $comorbidities++;
            }
            if($pacient->comorbidity_gestation){
                $comorbidities++;
            }

            if($pacient->complaint_dyspnea || $pacient->resperatory_rate > 30 || $pacient->systolic_blood_pressure < 90 || $pacient->oxygen_saturation < 95){
                $pacient->gravity = 4;
            }
            elseif($pacient->temperature < 39 || ($pacient->systolic_blood_pressure > 90 && $pacient->systolic_blood_pressure < 100) || $pacient->age > 80 || $comorbidities > 2 ){
                $pacient->gravity = 3;
            }
            elseif(($pacient->temperature < 35 && $pacient->temperature > 37) || $pacient->heart_rate > 100 || $pacient->resperatory_rate > 19 || ($pacient->age > 60 && $pacient->age < 79) || $comorbidities > 0 ){
                $pacient->gravity = 2;
            }
            else {
                $pacient->gravity = 1;
            }
            
            $pacient->save();
        }
        dd($pacients);
    }
}
