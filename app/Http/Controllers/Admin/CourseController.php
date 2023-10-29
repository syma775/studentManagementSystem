<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Department;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function courseAdd()
    {
        $departments = Department::get(); 
        return view('backend.admin.course.add',compact('departments'));
    }

    public function courseStore(Request $request)
    {
        // $this->validate($request,[
        //     'name' => 'required|string',
        //     'credit'=>'required|float',
        // ]);

        $course = new Course();
        $course->name = $request->name;
        $course->credit = $request->credit;
        $course->code = $request->code;
        $course->department_id = $request->department_id;
        $course->save();
        return redirect('/course/add')->with('success','course has been added');
    }

    public function courseList()
    {
        $courses = Course::with('department')->get();
        return view('backend.admin.course.list',compact('courses'));
    }

    public function courseEdit($id)
    {
        $course = Course::find($id);
        $departments = Department::get();
        return view('backend.admin.course.edit',compact('course','departments'));
    }

    public function courseUpdate(Request $request , $id)
    {
        // $this->validate($request,[
        //     'name' => 'required|string',
        //     'credit'=>'required|float',
        // ]);

        $course = Course::find($id);
        $course->name = $request->name;
        $course->credit = $request->credit;
        $course->code = $request->code;
        $course->department_id = $request->department_id;
        $course->save();
        return redirect('/course/add')->with('success','course has been updated');

    }

    public function courseDelete($id)
    {
        $courseDelete = Course::find($id);
        $courseDelete->delete();
        return redirect('/course/list')->with('success','course has been deleted');
    }

}
