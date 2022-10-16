<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class RegisterRequest extends FormRequest
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
            'login' => 'required|min:3',
            'name' => 'required',
            'surname' => 'required',
            'date' => 'required',
            'gender' => 'required',
            'password' => 'required',
        ];
    }

    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'success'   => false,
            'message'   => 'Ошибка валидации',
            'data'      => $validator->errors()
        ]));
    }

    public function messages()
    {
        return [
            'login.required' => 'Поле email обязательно для заполнения',
            'login.min' => 'Минимальная длина логина 3 символа',
            'name.required' => 'Поле Имя обязательно для заполнения',
            'surname.required' => 'Поле Фамилия обязательно для заполнения',
            'date.required' => 'Поле дата рождения обязательно для заполнения',
            'gender.required' => 'Поле Пол обязательно для заполнения',
            'password.required' => 'Поле Пароль обязательно для заполнения',
        ];
    }
}
