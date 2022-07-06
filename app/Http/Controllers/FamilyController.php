<?php

namespace App\Http\Controllers;

use App\Http\Requests\FamilyPostRequest;
use App\Http\Requests\PeoplePostRequest;
use App\Models\Family;


class FamilyController extends Controller{

    public function index(){
        $families=Family::all();
        //return $families;
        return response()->json($families);
    }

    public function store(FamilyPostRequest $request){
        $family = Family::create($request->all());

        return response()->json([
            'message' => "record saved successfully!",
            'family' => $family
        ], 200);
    }

    public function update(FamilyPostRequest $request, Family $family){
        $family->update($request->all());

        return response()->json([
            'message' => "record updated successfully!",
            'family' => $family
        ], 200);
    }

    public function destroy(Family $family){
        $family->delete();
        return response()->json([
            'message' => "record deleted successfully!",
        ], 200);
    }
}
