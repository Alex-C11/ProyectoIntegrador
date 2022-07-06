<?php

namespace App\Http\Controllers;

use App\Http\Requests\StandPostRequest;

use App\Models\Stand;

class StandController extends Controller{

    public function index(){
        $stands=Stand::all();
        //return $stands;
        return response()->json($stands);
    }

    public function store(StandPostRequest $request){
        $stand = Stand::create($request->all());

        return response()->json([
            'message' => "record saved successfully!",
            'stand' => $stand
        ], 200);
    }

    public function update(StandPostRequest $request, Stand $stand){
        $stand->update($request->all());

        return response()->json([
            'message' => "record updated successfully!",
            'stand' => $stand
        ], 200);
    }

    public function destroy(Stand $stand){
        $stand->delete();
        return response()->json([
            'message' => "record deleted successfully!",
        ], 200);
    }
}
