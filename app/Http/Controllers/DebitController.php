<?php

namespace App\Http\Controllers;

use App\Http\Requests\DebitPostRequest;

use App\Models\Debit;


class DebitController extends Controller{

    public function index(){
        $debits=Debit::all();
        //return $debits;
        return response()->json($debits);
    }

    public function store(DebitPostRequest $request){
        $debit = Debit::create($request->all());

        return response()->json([
            'message' => "record saved successfully!",
            'debit' => $debit
        ], 200);
    }

    public function update(DebitPostRequest $request, Debit $debit){
        $debit->update($request->all());

        return response()->json([
            'message' => "record updated successfully!",
            'debit' => $debit
        ], 200);
    }

    public function destroy(Debit $debit){
        $debit->delete();
        return response()->json([
            'message' => "record deleted successfully!",
        ], 200);
    }
}
