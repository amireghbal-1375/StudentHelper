<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create()
    {
        $user = new User;
        $user->name = 'امیر';
        $user->family = 'اقبال';
        $user->email = 'amireghbal.dev@yahoo.com';
        $user->phone_number = '09013073559';
        $user->password = '1234567';
        $user->type = 'دانشجو';

        $user->save();

        return 'success';
    }
}
