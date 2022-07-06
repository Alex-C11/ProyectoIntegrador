<?php

namespace App\Http\Controllers;


use App\Http\Requests\PeriodPostRequest;

use App\Models\Period;

class PeriodController extends Controller{

    public function index(){
        $periods=Period::all();
        //return $periods;
        return response()->json($periods);
    }

    public function store(PeriodPostRequest $request){
        $period = Period::create($request->all());

        return response()->json([
            'message' => "record saved successfully!",
            'period' => $period
        ], 200);
    }

    public function update(PeriodPostRequest $request, Period $period){
        $period->update($request->all());

        return response()->json([
            'message' => "record updated successfully!",
            'period' => $period
        ], 200);
    }

    public function destroy(Period $period){
        $period->delete();
        return response()->json([
            'message' => "record deleted successfully!",
        ], 200);
    }
}
