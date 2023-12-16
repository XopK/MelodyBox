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
            'profile_photo' => 'default_photo.svg',
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

        if (Auth::attempt([
            'email' => $user['log_email'],
            'password' => $user['log_password'],
        ])) {
            if (Auth::user()->id == 5) {
                return redirect('admin')->with('succes', 'Привет админ');
            } else {
                return redirect('/')->with('succes', '');
            }
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

    public function updateUser(Request $request)
    {
        // $request->validate(
        //     [
        //         'firstname' => 'required|max:100',
        //         'lastname' => 'required|max:100',
        //         'phone' => 'required|unique:users|max:12',
        //         'email' => 'required|unique:users|email',
        //     ],
        //     [
        //         'firstname.required' => 'Заполните поле!',
        //         'lastname.required' => 'Заполните поле!',
        //         'phone.required' => 'Заполните поле!',
        //         'email.required' => 'Заполните поле!',
        //         'firstname.max' => 'Слишком много символов!',
        //         'lastname.max' => 'Слишком много символов!',
        //         'phone.unique' => 'Пользователь с таким номером зарегистрирован!',
        //         'email.unique' => 'Пользователь с такой почтой зарегистрирован!',
        //         'phone.max' => 'Слишком много символов!',
        //         'email.email' => 'Введите правильный адрес!',
        //     ],
        // );

        $updateInfo = User::find(Auth::user()->id);
        $updateInfoArist = Artist::find(Auth::user()->id);
        if (!empty($request['photo'])) {
            $name_photo = $request->file('photo')->hashName();
            $path_photo = $request->file('photo')->store('public/img');
            $updateInfoArist->profile_img = $name_photo;
            $updateInfo->profile_photo = $name_photo;
        }
        if (!empty($request['photoBg'])) {
            $name_photoBg = $request->file('photoBg')->hashName();
            $path_photoBg = $request->file('photoBg')->store('public/img');
            $updateInfoArist->banner_profile = $name_photoBg;
        }
        if (!empty($request['password'])) {
            $updateInfo->password = $request['password'];
        }
        if (empty($updateInfoArist)) {
            $updateInfo->name = $request['firstname'];
            $updateInfo->surname = $request['lastname'];
            $updateInfo->phone_number = $request['phone'];
            $updateInfo->email = $request['email'];
            $updateInfo->save();
        } else {
            $updateInfo->name = $request['firstname'];
            $updateInfo->surname = $request['lastname'];
            $updateInfo->phone_number = $request['phone'];
            $updateInfo->email = $request['email'];
            $updateInfo->save();
            $updateInfoArist->save();
        }



        return redirect('/personal_area')->with('succes', 'Успешная регистрация');
    }
}
