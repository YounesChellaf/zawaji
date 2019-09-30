<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InvitationRequest extends FormRequest
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
            'slogan' => 'required',
            'location' => 'required',
            'date' => 'required|date',
            'time' => 'required|time',
            'destination' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'slogan.required' => "slogan est obligatoire",
            'location.required' => "location est obligatoire",
            'date.required' => "date est obligatoire",
            'time.required' => "time est obligatoire",
            'destination.required' => "destination est obligatoire",
        ];
    }
}
