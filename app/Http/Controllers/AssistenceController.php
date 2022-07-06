<?php

namespace App\Http\Controllers;

use App\Http\Requests\AssistencePostRequest;
use App\Http\Requests\PeoplePostRequest;
use App\Models\Assistence;

class AssistenceController extends Controller{

    public function index(){
        $assistences=Assistence::all();
        //return $assistences;
        return response()->json($assistences);
    }

    public function store(AssistencePostRequest $request){
        $assistence = Assistence::create($request->all());

        return response()->json([
            'message' => "record saved successfully!",
            'assistence' => $assistence
        ], 200);
    }

    public function update(AssistencePostRequest $request, Assistence $assistence){
        $assistence->update($request->all());

        return response()->json([
            'message' => "record updated successfully!",
            'assistence' => $assistence
        ], 200);
    }

    public function destroy(Assistence $assistence){
        $assistence->delete();
        return response()->json([
            'message' => "record deleted successfully!",
        ], 200);
    }
}
