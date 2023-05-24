<?php

namespace Modules\Auth\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;

class RegisterRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'first_name' => ['nullable' , 'string' , 'min:2'] ,
            'last_name' => ['nullable' , 'string' , 'min:2'] ,
            'email' => ['required' , 'email' , Rule::unique('users' , 'email')] ,
            'password' => ['required' , Password::defaults() , 'confirmed']
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
}
