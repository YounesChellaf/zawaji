<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReservationRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'reserver_name' => 'required',
            'date_from' => 'required|date',
            'date_to' => 'required|date',
        ];
    }

    public function messages()
    {
        return [
            'reserver_name.required' => "reserver_name est obligatoire",
            'date_from.required' => "date_from est obligatoire",
            'date_to.required' => "date_to est obligatoire",
        ];
    }
}