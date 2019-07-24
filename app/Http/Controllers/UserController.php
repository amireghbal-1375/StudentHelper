<?php

namespace App\Http\Controllers;
use App\User;
use App\Http\Controllers\Controller;
use App\Http\Controllers\CourseController;
use App\course;
use App\university;
use DB;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request)
    {
        $name = $request->input('name');
        $family = $request->input('family');
        $email = $request->input('email');
        $phone_number = $request->input('phone_number');
        $password = $request->input('password');
        $type = $request->input('type');
        $data=array('name'=>$name,"family"=>$family,"email"=>$email, "phone_number"=>$phone_number, "password"=>$password, "type"=>$type);
        DB::table('users')->insert($data);
        echo "Record inserted successfully.<br/>";
        echo '<a href = "user/create">اینجا کلیک کنید</a> برای بازگشت.';
    }
}
