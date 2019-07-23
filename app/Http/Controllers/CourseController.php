<?php

namespace App\Http\Controllers;
use App\course;
use App\university;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function present()
    {
        $course = new course;
        $course->name = 'تاریخ امامت';
        $course->unit = '2';
        $course->type = 'عمومی';
        $course->presentation_type = 'تئوری';
        $course->field = 'همه';

        $course->save();

        $university = university::find([1,2]);
        $course->universitys()->attach($university);

        return 'success';
    }
}
