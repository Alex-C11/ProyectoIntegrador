<?php

namespace App\Http\Controllers;

use App\Http\Requests\PaymentPostRequest;

use App\Models\Payment;


class PaymentController extends Controller{

    public function index(){
        $payments=Payment::all();
        //return $payments;
        return response()->json($payments);
    }

    public function store(PaymentPostRequest $request){
        $payment = Payment::create($request->all());

        return response()->json([
            'message' => "record saved successfully!",
            'payment' => $payment
        ], 200);
    }

    public function update(PaymentPostRequest $request, Payment $payment){
        $payment->update($request->all());

        return response()->json([
            'message' => "record updated successfully!",
            'payment' => $payment
        ], 200);
    }

    public function destroy(Payment $payment){
        $payment->delete();
        return response()->json([
            'message' => "record deleted successfully!",
        ], 200);
    }
}
