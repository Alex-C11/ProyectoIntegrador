<?php

namespace App\Http\Controllers;

use App\Http\Requests\AssociationPostRequest;

use App\Models\Association;

class AssociationController extends Controller{

    public function index(){
        $associations=Association::all();
        //return $associations;
        return response()->json($associations);
    }

    public function store(AssociationPostRequest $request){
        $association = Association::create($request->all());

        return response()->json([
            'message' => "record saved successfully!",
            'association' => $association
        ], 200);
    }

    public function update(AssociationPostRequest $request, Association $association){
        $association->update($request->all());

        return response()->json([
            'message' => "record updated successfully!",
            'association' => $association
        ], 200);
    }

    public function destroy(Association $association){
        $association->delete();
        return response()->json([
            'message' => "record deleted successfully!",
        ], 200);
    }
}
