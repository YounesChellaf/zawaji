<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PartyRoomRequest extends FormRequest
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
            'name' => 'required|min:3',
            'description' => 'required',
            'email' => 'required|email',
            'phone_number' => 'required',
            'city' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => "اسم قاعة الافراح اجبــــاري",
            'description.required' => "يجب عليكم اضافـة وصف حول القاعـــة",
            'email.required' => "الايميــــــل اجبــــاري",
            'city.required' => "المدينـة اجبــــارية",
            'phone_number.required' => "رقم الهاتف اجبــــاري",

            ];
    }
}
