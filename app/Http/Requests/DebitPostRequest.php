<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DebitPostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'type'=>"required",
            'amount'=>"required",
            'description'=>"required",
            'associate_id'=>"required",
            'association_id'=>"required",
        ];
    }
}
