<?php

namespace App\Http\Controllers;

use App\Http\Requests\PeoplePostRequest;

use App\Models\People;

class PeopleController extends Controller{

    public function index(){
        $peoples=People::all();
        //return $schools;
        return response()->json($peoples);
    }

    public function store(PeoplePostRequest $request){
        $people = People::create($request->all());

        return response()->json([
            'message' => "record saved successfully!",
            'people' => $people
        ], 200);
    }

    public function update(PeoplePostRequest $request, People $people){
        $people->update($request->all());

        return response()->json([
            'message' => "record updated successfully!",
            'people' => $people
        ], 200);
    }

    public function destroy(People $people){
        $people->delete();
        return response()->json([
            'message' => "record deleted successfully!",
        ], 200);
    }
}
