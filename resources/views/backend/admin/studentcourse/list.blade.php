@extends('backend.master')

@section('content')
    <div class="container-fluid">
        <div class="col-md-12">
            <h3 style="text-align:center">Student Course List</h3>
              @if(session()->has('success'))
                <div class="alert alert-success" style="color:green;">{{ session()->get('success') }}</div>
              @endif
            <table class="table table-bordered">
                <tr>
                    <th>SL</th>
                    <th>Course Name</th>
                    <th>Course Credit</th>
                    <th>Course Code</th>
                    <th>Course Duration</th>
                    <th>Department Name</th>
                    <th>Action</th>
                </tr>

                @foreach($studentCourses as $studentCourse)
                    <tr>
                        <td>{{ $loop->index+1 }}</td>
                        <td>{{ $studentCourse->course->name }}</td>
                        <td>{{ $studentCourse->course->credit}}</td>
                        <td>{{ $studentCourse->course->code}}</td>
                        <td>{{ $studentCourse->time }}</td>
                        <td>{{ $studentCourse->department->departmentname }}</td>
                        <td>
                            <a href="{{ url('/student/course/edit/'.$studentCourse->id) }}" class="btn btn-sm btn-info">Edit</a>
                            <a href="{{ url('/student/course/delete/'.$studentCourse->id) }}" onclick="return confirm('Are you sure??');" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach

            </table>
        </div>
    </div>
@endsection