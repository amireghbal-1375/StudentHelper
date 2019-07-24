<?php

namespace App\Http\Controllers;
use App\User;
use App\Http\Controllers\Controller;
use App\Http\Controllers\CourseController;
use App\course;
use App\university;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create()
    {
        $users = User::all();
        /*$user = new User;
        $user->name = 'امیر';
        $user->family = 'اقبال';
        $user->email = 'amireghbal.dev@yahoo.com';
        $user->phone_number = '09013073559';
        $user->password = '1234567';
        $user->type = 'دانشجو';

        $user->save();

        return 'success';*/
        return view('user.create');
    }

    public function store(Request $request)
    {
        /*$user_data = [
            'name'     => request()->input('name'),
            'family'    => request()->input('family'),
            'email' => request()->input('email'),
            'phone_number'     => request()->input('phone_number'),
            'password'   => request()->input('password'),
            'type'   => request()->input('type'),
        ];
        $new_user_opject = User::create($user_data);*/
        $this->validate(request(),[
        ]);
        $user= Input::all();
        $user = new User;
        $user->name = Input::get('name');
        $user->family = Input::get('family');
        $user->email = Input::get('email');
        $user->phone_number = Input::get('phone_number');
        $user->password = Input::get('password');
        $user->type = Input::get('type');
        $user->save();

        return Redirect::back();
    }
}
