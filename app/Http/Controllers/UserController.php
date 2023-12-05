<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Artist;
use Illuminate\Support\Facades\Session;

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

        return redirect('/')->with('succes', 'Успешная регистрация');
    }

    public function login(Request $request)
    {
        $request->validate(
            [
                'log_email' => 'required|email',
                'log_password' => 'required',
            ],
            [
                'log_email.required' => 'Заполните поле!',
                'log_email.email' => 'Введите правильный адрес!',
                'log_password.required' => 'Заполните поле!',
            ],
        );

        $user = $request->only('log_email', 'log_password');

        if (
            Auth::attempt([
                'email' => $user['log_email'],
                'password' => $user['log_password'],
            ])
        ) {
            return redirect('/playlist')->with('succes', '');
        } else {
            return redirect('/')->with('error', 'Проверьте введеные данные!');
        }
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect('/');
    }

    public function application_artist(Request $request)
    {
        $request->validate(
            [
                'artist_name' => 'required',
                'label_email' => 'required|email',
            ],
            [
                'artist_name.required' => 'Заполните поле!',
                'label_email.email' => 'Введите правильный адрес!',
                'label_email.required' => 'Заполните поле!',
            ],
        );

        $id_user = Auth::user()->id;

        $application = $request->all();

        Artist::create([
            'id_user' => $id_user,
            'artist_name' => $application['artist_name'],
            'profile_img' => 'default_profile.png',
            'banner_profile' => 'default_banner.png',
            'label_email' => $application['label_email'],
            'status_num' => 0
        ]);
        return redirect('/')->with('succes', 'Заявка подана');
    }
}
