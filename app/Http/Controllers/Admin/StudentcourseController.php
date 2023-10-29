<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\StudentCourse;
use App\Http\Controllers\Admin\studentcourseController;
use App\Models\Department;
use Illuminate\Http\Request;

class StudentcourseController extends Controller
{
    public function studentCourseAdd()
    {
        $courses = Course::get();
        $departments = Department::get();
        return view('backend.admin.studentcourse.add',compact('courses','departments'));
    }

    public function studentCourseStore(Request $request)
    {
        // $this->validate($request,[
        //     'course_id' => 'required|string',
        //     'course_credit'=>'required|float',
        //     'course_code' => 'required|string',
        //     'time' => 'required|date',
        //     'department_id' => 'required|integer',
        // ]);

        $studentcourse = new StudentCourse();
        $studentcourse->course_id = $request->course_id;
        $studentcourse->course_credit = $request->course_credit;
        $studentcourse->course_code = $request->course_code;
        $studentcourse->time = $request->time;
        $studentcourse->department_id = $request->department_id;
        $studentcourse->save();
        return redirect()->back()->with('success','student course has been added');
    }

    public function studentCourseList()
    {
        $studentCourses = StudentCourse::with('department','course')->get();
        return view('backend.admin.studentcourse.list', compact('studentCourses'));
    }

    public function studentCourseEdit($id)
    {
        $studentCourse = StudentCourse::find($id);
        $courses = Course::get();
        $departments = Department::get();
        return view('backend.admin.studentcourse.edit',compact('studentCourse','courses','departments'));
    }

    public function StudentCourseUpdate(Request $request, $id)
    {
       // $this->validate($request,[
        //     'course_id' => 'required|string',
        //     'course_credit'=>'required|float',
        //     'course_code' => 'required|string',
        //     'time' => 'required|date',
        //     'department_id' => 'required|integer',
        // ]);
        // dd($request->course_id);
        $studentcourse = StudentCourse::find($id);
        $studentcourse->course_id = $request->course_id;
        $studentcourse->course_credit = $request->course_credit;
        $studentcourse->course_code = $request->course_code;
        $studentcourse->time = $request->time;
        $studentcourse->department_id = $request->department_id;
        $studentcourse->save();
        return redirect()->back()->with('success','student course has been Updated.');
    }

    public function studentCourseDelete($id)
    {
        $studentCourseDelete = StudentCourse::find($id);
        $studentCourseDelete->delete();
        return redirect()->back()->with('success','student course has been Deleted');
    }
}
