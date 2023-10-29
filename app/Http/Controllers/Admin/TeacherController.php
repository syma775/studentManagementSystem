<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use Session;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function teacherAdd()
    {
        return view('backend.admin.teacher.add');
    }

    public function teacherDetailStore(Request $request)
    {
        $this->validate($request,[
            'name'=> 'required|string',
            'contact'=> 'required|integer',
            'email'=> 'required|string',
            'password'=> 'required|string',
            'address'=> 'required|string',
            'gender'=> 'required|string',
            'qualification'=> 'required|string',
            'experience'=> 'required|string',
            'dob'=> 'required|string',
            'religion'=> 'required|string',
            'image'=> 'required',

        ]);

        if($request->file('image')){
            $imagename = time().'.'.$request->image->extension();
            $request->image->move(public_path('/teacherImage/'),$imagename);
        }

        $teacher = new Teacher();
        $teacher->name = $request->name;
        $teacher->contact = $request->contact;
        $teacher->email = $request->email;
        $teacher->password = bcrypt($request->password);
        $teacher->address = $request->address;
        $teacher->course = $request->course;
        $teacher->gender = $request->gender;
        $teacher->qualification = $request->qualification;
        $teacher->experience = $request->experience;
        $teacher->dob = $request->dob;
        $teacher->religion = $request->religion;
        $teacher->image = $imagename ;
        $teacher->save();

        return redirect()->back()->with('success','Teacher has been added');
    }

    public function teacherList()
    {
        $teachers = Teacher::get();
        return view('backend.admin.teacher.list',compact('teachers'));
    }

    public function teacherEdit($id)
    {
        $teacher = Teacher::find($id);
        return view('backend.admin.teacher.edit',compact('teacher'));
    }

    public function teacherDetailUpdate(Request $request, $id)
    {
        $this->validate($request,[
            'name'=> 'required|string',
            'contact'=> 'required|integer',
            'email'=> 'required|string',
            'address'=> 'required|string',
            'gender'=> 'required|string',
            'qualification'=> 'required|string',
            'experience'=> 'required|string',
            'dob'=> 'required|string',
            'religion'=> 'required|string',
            'image'=> 'required',

        ]);

        $teacher = Teacher::find($id);

        if(isset($request->image)){
            if($teacher->image && file_exists('teacherImage/'.$teacher->image)){
                unlink('teacherImage/'.$teacher->image);
            }
            $updateImage = time().'.'.$request->image->extension();
            $request->image->move(public_path('/teacherImage/'),$updateImage);
            $teacher->image = $updateImage;
        }

        $teacher->name = $request->name;
        $teacher->contact = $request->contact;
        $teacher->email = $request->email;
        $teacher->address = $request->address;
        $teacher->course = $request->course;
        $teacher->gender = $request->gender;
        $teacher->qualification = $request->qualification;
        $teacher->experience = $request->experience;
        $teacher->dob = $request->dob;
        $teacher->religion = $request->religion;
        $teacher->save();

        return redirect()->back()->with('success','Teacher has been updated');
    }

    public function teacherDelete($id)
    {
        $teacherDelete = Teacher::find($id);
        $teacherDelete->delete();
        return redirect('/teachers/list')->with('success','Teacher has been deleted');
    }

    public function teachersLoginForm()
    {
        return view('backend.admin.teacher.login');
    }

    public function teacherLogin(Request $request)
    {
        // dd($request->all());
    //    $this->validate($request,[
    //      'email' => 'required|string',
    //      'password' => 'required|string',
    //    ]);

       $teacher = Teacher::where('email',$request->email)->first();
    //    dd($teacher);
       if(!$teacher){
        return redirect()->back()->with('success','email not match. please give correct email .');
      }else{
        if(password_verify($request->password, $teacher->password)){
            Session::put('teacherId',$teacher->id);
            Session::put('teacherName',$teacher->name);
            return redirect('/teacher/dashboard');
        }else{
            return redirect()->back()->with('success','password not match. please give correct password .');
        }
      }
    }

    public function teacherDashboard()
    {
        return view('frontend.teacher.dashboard');
    }
}
