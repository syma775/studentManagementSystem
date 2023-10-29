@extends('backend.master')

@section('content')
    <div class="container-fluid">
       <div class="scrollmenu">
       <div class="col-md-12">
            <h3 style="text-align:center">Students List</h3>
              @if(session()->has('success'))
                <div class="alert alert-success" style="color:green;">{{ session()->get('success') }}</div>
              @endif
            <table class="table table-bordered">
                <tr>
                    <th>SL</th>
                    <th>Name</th>
                    <th>Father Name</th>
                    <th>Mother Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Degree Program</th>
                    <th>Date of Birth</th>
                    <th>Religion</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>

                @foreach($students as $student)
                    <tr>
                        <td>{{ $loop->index+1 }}</td>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->fathername }}</td>
                        <td>{{ $student->mothername }}</td>
                        <td>{{ $student->phone }}</td>
                        <td>{{ $student->email }}</td>
                        <td>{{ $student->address }}</td>
                        <td>{{ $student->degree }}</td>
                        <td>{{ $student->dob }}</td>
                        <td>{{ $student->religion }}</td>
                        <td>
                            <img src="{{ asset('/studentimage/'.$student->image) }}" height="80px" weight="80px"/>
                        </td>
                        <td>
                            <a href="{{ url('/student/edit/'.$student->id) }}" class="btn btn-sm btn-info">Edit</a>
                            <a href="{{ url('/student/delete/'.$student->id) }}" onclick="return confirm('Are you sure??');" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach

            </table>
        </div>
       </div>
    </div>
@endsection