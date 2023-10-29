<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use App\Models\Class;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    public function classAdd()
    {
        $students = Student::get();
        $teachers = Teacher::get();
        return view('backend.admin.class.add',compact('teachers','students'));
    }
}
