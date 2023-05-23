<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistrationRequest extends FormRequest
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
            'name' => ['required', 'string'],
            'surname' => ['required', 'string'],
            'login' => ['required', 'unique:users'],
            'email' => ['required', 'unique:users', 'email'],
            'password' => ['required'],
            'password_repeat' => ['required'],

            'rules' => ['required']
        ];
    }

   public function messages()
   {
       return [
           'name.required' => 'Имя должны быть заполнено',
           'name.string' => 'Поле Имя должно быть строкой',

           'surname.required' => 'Фамилия должна быть заполнено',
           'surname.string' => 'Поле Фамилия должна быть строкой',

           'login.required' => 'Логин должен быть заполнен',
           'login.unique' => 'Данный Логин занят',

           'email.required' => 'Почта должна быть заполнена',
           'email.unique' => 'Почта уже занята',
           'email.email' => 'Поле почта некорректна',

           'password.required' => 'Пароль должен быть заполнен',

           'password_repeat' => 'Повторный Пароль должен быть заполнен',

           'rules.required' => 'Вы не согласились с обработкой персональных данных'
       ];
   }
}
