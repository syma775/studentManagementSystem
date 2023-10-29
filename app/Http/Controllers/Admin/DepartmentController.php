<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function departmentAdd()
    {
        return view('backend.admin.department.add');
    }

    public function departmentDetailStore(Request $request)
    {
        $this->validate($request,[
            'departmentname' => 'required|string',
            'departmentcode' => 'required|string',
        ]);

        $department = new Department();
        $department->departmentname = $request->departmentname;
        $department->departmentcode = $request->departmentcode;
        $department->save();
        return redirect('/department/add')->with('success','department has been added.');
    }

    public function departmentList()
    {
        $departments = Department::get();
        return view('backend.admin.department.list',compact('departments'));
    }

    public function departmentEdit($id)
    {
        $department = Department::find($id);
        return view('backend.admin.department.edit',compact('department'));
    }

    public function departmentDetailUpdate(Request $request, $id)
    {
        $this->validate($request,[
            'departmentname' => 'required|string',
            'departmentcode' => 'required|string',
        ]);
        
        $department = Department::find($id);
        $department->departmentname = $request->departmentname;
        $department->departmentcode = $request->departmentcode;
        $department->save();
        return redirect('/department/list')->with('success','department has been Updated.');
    }

    public function departmentDelete($id)
    {
        $departmentDelete = Department::find($id);
        $departmentDelete->delete();
        return redirect('/department/list')->with('success','department has been Deleted.');
    }
}
