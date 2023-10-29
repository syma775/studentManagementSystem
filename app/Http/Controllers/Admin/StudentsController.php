<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function studentsAdd()
    {
        return view('backend.admin.student.add');
    }

    public function studentDetailStore(Request $request)
    {
        $this->validate($request,[
            'name'=> 'required|string',
            'fathername'=> 'required|string',
            'mothername'=> 'required|string',
            'phone'=> 'required|integer',
            'email'=> 'required|string',
            'address'=> 'required|string',
            'semester'=> 'required|string',
            'degree'=> 'required|string',
            'dob'=> 'required|string',
            'religion'=> 'required|string',
            'image'=> 'required',
        ]);

        if($request->file('image')){
            $imagename = time().'.'.$request->image->extension();
            $request->image->move(public_path('/studentImage/'),$imagename);
        }

        $student = new Student();
        
        $student->name = $request->name;
        $student->fathername = $request->fathername;
        $student->mothername = $request->mothername;
        $student->phone = $request->phone;
        $student->email = $request->email;
        $student->address = $request->address;
        $student->semester = $request->semester;
        $student->degree = $request->degree;
        $student->dob = $request->dob;
        $student->religion = $request->religion;
        $student->image = $imagename ;
        $student->save();

        return redirect()->back()->with('success','student has been added');
    }

    public function studentsList()
    {
        $students = Student::get();
        // return $students;
        return view('backend.admin.student.list',compact('students'));
    }

    public function studentDelete($id)
    {
        $studentDelete = Student::find($id);
        $studentDelete->delete();
        return redirect('/students/list')->with('success','student has been deleted');
    }

    public function studentEdit($id)
    {
        $student = Student::find($id);
        return view('backend.admin.student.edit',compact('student'));
    }

    public function studentDetailUpdate(Request $request, $id)
    {
        $this->validate($request,[
            'name'=> 'required|string',
            'fathername'=> 'required|string',
            'mothername'=> 'required|string',
            'phone'=> 'required|integer',
            'email'=> 'required|string',
            'address'=> 'required|string',
            'semester'=> 'required|string',
            'degree'=> 'required|string',
            'dob'=> 'required|string',
            'religion'=> 'required|string',
        ]);

        $student = Student::find($id);

        if(isset($request->image)){
            if($student->image && file_exists('studentImage/'.$student->image)){
                unlink('studentImage/'.$student->image);
            }
            $updateImage = time().'.'.$request->image->extension();
            $request->image->move(public_path('/studentImage/'),$updateImage);
            $student->image = $updateImage;
        }

        $student->name = $request->name;
        $student->fathername = $request->fathername;
        $student->mothername = $request->mothername;
        $student->phone = $request->phone;
        $student->email = $request->email;
        $student->address = $request->address;
        $student->semester = $request->semester;
        $student->degree = $request->degree;
        $student->dob = $request->dob;
        $student->religion = $request->religion;
        $student->save();

        return redirect()->back()->with('success','student has been updated');
    }
}
