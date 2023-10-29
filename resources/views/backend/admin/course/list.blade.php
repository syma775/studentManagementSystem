@extends('backend.master')

@section('content')
    <div class="container-fluid">
        <div class="col-md-12">
            <h3 style="text-align:center">Course List</h3>
              @if(session()->has('success'))
                <div class="alert alert-success" style="color:green;">{{ session()->get('success') }}</div>
              @endif
            <table class="table table-bordered">
                <tr>
                    <th>SL</th>
                    <th>Course Name</th>
                    <th>Course Credit</th>
                    <th>Course Code</th>
                    <th>Department Name</th>
                    <th>Action</th>
                </tr>

                @foreach($courses as $course)
                    <tr>
                        <td>{{ $loop->index+1 }}</td>
                        <td>{{ $course->name }}</td>
                        <td>{{ $course->credit }}</td>
                        <td>{{ $course->code }}</td>
                        <td>{{ $course->department->departmentname }}</td>
                        <td>
                            <a href="{{ url('/course/edit/'.$course->id) }}" class="btn btn-sm btn-info">Edit</a>
                            <a href="{{ url('/course/delete/'.$course->id) }}" onclick="return confirm('Are you sure??');" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach

            </table>
        </div>
    </div>
@endsection