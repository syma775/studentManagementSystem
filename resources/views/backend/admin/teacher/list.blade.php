@extends('backend.master')

@section('content')
    <div class="container-fluid">

    <div class="scrollmenu">
    <div class="col-md-12">
            <h3 style="text-align:center">Teachers List</h3>
            

              @if(session()->has('success'))
                <div class="alert alert-success" style="color:green;">{{ session()->get('success') }}</div>
              @endif
            <table class="table table-bordered">
                <tr>
                    <th>SL</th>
                    <th>Name</th>
                    <th>Contact</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Address</th>
                    <th>Course you can take?</th>
                    <th>Gender</th>
                    <th>Qualification</th>
                    <th>Experience</th>
                    <th>Date of Birth</th>
                    <th>Religion</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>

                @foreach($teachers as $teacher)
                    <tr>
                        <td>{{ $loop->index+1 }}</td>
                        <td>{{ $teacher->name }}</td>
                        <td>{{ $teacher->contact }}</td>
                        <td>{{ $teacher->email }}</td>
                        <td>{{ $teacher->password }}</td>
                        <td>{{ $teacher->address }}</td>
                        <td>{{ $teacher->course }}</td>
                        <td>{{ $teacher->gender }}</td>
                        <td>{{ $teacher->qualification }}</td>
                        <td>{{ $teacher->experience }}</td>
                        <td>{{ $teacher->dob }}</td>
                        <td>{{ $teacher->religion }}</td>
                        <td>
                            <img src="{{ asset('/teacherImage/'.$teacher->image) }}" height="80px" weight="80px"/>
                        </td>
                        <td>
                            <a href="{{ url('/teacher/edit/'.$teacher->id) }}" class="btn btn-sm btn-info">Edit</a>
                            <a href="{{ url('/teacher/delete/'.$teacher->id) }}" onclick="return confirm('Are you sure??');" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach

            </table>
            

        </div>
    </div>
    </div>
@endsection