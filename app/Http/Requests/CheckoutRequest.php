<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckoutRequest extends FormRequest
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
        $emailValidattion = auth()->user()? 'required|email' : 'required|email|unique:users';
        return [
            'email' => $emailValidattion,
            'name'  =>  'required',
            'address'=> 'required',
            'city'  =>  'required',
            'town'  =>  'required',
            'postalcode' => 'required',
            'phone' => 'required',
        ];
    }
}
