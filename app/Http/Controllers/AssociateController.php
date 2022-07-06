<?php

namespace App\Http\Controllers;

use App\Http\Requests\AssociatePostRequest;

use App\Models\Associate;

class AssociateController extends Controller{

    public function index(){
        $associates=Associate::all();
        //return $associates;
        return response()->json($associates);
    }

    public function store(AssociatePostRequest $request){
        $associate = Associate::create($request->all());

        return response()->json([
            'message' => "record saved successfully!",
            'associate' => $associate
        ], 200);
    }

    public function update(AssociatePostRequest $request, Associate $associate){
        $associate->update($request->all());

        return response()->json([
            'message' => "record updated successfully!",
            'associate' => $associate
        ], 200);
    }

    public function destroy(Associate $associate){
        $associate->delete();
        return response()->json([
            'message' => "record deleted successfully!",
        ], 200);
    }
}
