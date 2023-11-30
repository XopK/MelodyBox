<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function registration(Request $request)
    {
        $request->validate(
            [
                'reg_name' => 'required|max:100',
                'reg_surname' => 'required|max:100',
                'phone_number' => 'required|unique:users|max:12',
                'email' => 'required|unique:users|email',
                'reg_password' => 'required',
                'reg_confirm_password' => 'required|same:reg_password',
            ],
            [
                'reg_name.required' => 'Заполните поле!',
                'reg_surname.required' => 'Заполните поле!',
                'phone_number.required' => 'Заполните поле!',
                'email.required' => 'Заполните поле!',
                'reg_password.required' => 'Заполните поле!',
                'reg_confirm_password.required' => 'Заполните поле!',
                'reg_name.max' => 'Слишком много символов!',
                'reg_surname.max' => 'Слишком много символов!',
                'phone_number.unique' => 'Пользователь с таким номером зарегистрирован!',
                'email.unique' => 'Пользователь с такой почтой зарегистрирован!',
                'phone_number.max' => 'Слишком много символов!',
                'email.email' => 'Введите правильный адрес!',
                'reg_confirm_password.same' => 'Пароли должны совпадать!',
            ],
        );

        $reg_info = $request->all();

        User::create([
            'name' => $reg_info['reg_name'],
            'surname' => $reg_info['reg_surname'],
            'phone_number' => $reg_info['phone_number'],
            'email' => $reg_info['email'],
            'password' => $reg_info['reg_password'],
        ]);

        return redirect('/playlist')->with("succes", "Успешная регистрация");
    }
}
