<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AssociatePostRequest extends FormRequest
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
            'people_id'=> "required",
            'code'=> "required",
            'type'=> "required",
            'status'=> "required",
            'stand_id'=> "required",
            'period_id'=> "required",
        ];
    }
}
