<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class StoreUserRequest extends FormRequest
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
            'name'=>'required',
            'email' => 'required|email:rfc,dns|unique:users,email',
            'username' => 'required|unique:users,username',
            'password' => 'required|min:8',
            'image'=>'required|image',
            'password_confirmation' => 'required|same:password'
        ];
    }
//    public function failedValidation(Validator $validator)
//    {
//        throw new HttpResponseException(response()->json([
//            'success'   => false,
//            'message'   => 'Validation errors',
//            'data'      => $validator->errors()
//        ]));
//    }

}
