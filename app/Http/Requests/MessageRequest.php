<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MessageRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required|min:5',
            'message' => 'required|min:10'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => "الاســـــم اجبــاري",
            'email.required' => "الايميــــــل اجبــــاري",
            'subject.required' => "الموضـوع اجبــــاري",
            'subject.min' => "الموضـوع يجب ان يتعدى 5 حروف",
            'message.required' => "مضمون الرسالة اجبــــاري",
            'message.min' => "طـــول الرسالة يجب ان لا يقل عن 10 حــروف",

        ];
    }
}
