<?php

namespace App\Http\Controllers;

use App\Http\Requests\ActivityPostRequest;
use App\Models\Activity;


class ActivityController extends Controller{

    public function index(){
        $activities=Activity::all();
        //return $activities;
        return response()->json($activities);
    }

    public function store(ActivityPostRequest $request){
        $activity = Activity::create($request->all());

        return response()->json([
            'message' => "record saved successfully!",
            'activity' => $activity
        ], 200);
    }

    public function update(ActivityPostRequest $request, Activity $activity){
        $activity->update($request->all());

        return response()->json([
            'message' => "record updated successfully!",
            'activity' => $activity
        ], 200);
    }

    public function destroy(Activity $activity){
        $activity->delete();
        return response()->json([
            'message' => "record deleted successfully!",
        ], 200);
    }
}
