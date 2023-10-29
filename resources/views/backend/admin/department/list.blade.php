@extends('backend.master')

@section('content')
    <div class="container-fluid">
        <div class="col-md-12">
            <h3 style="text-align:center">Departments List</h3>
              @if(session()->has('success'))
                <div class="alert alert-success" style="color:green;">{{ session()->get('success') }}</div>
              @endif
            <table class="table table-bordered">
                <tr>
                    <th>SL</th>
                    <th>Department Name</th>
                    <th>Department Code</th>
                    <th>Action</th>
                </tr>

                @foreach($departments as $department)
                    <tr>
                        <td>{{ $loop->index+1 }}</td>
                        <td>{{ $department->departmentname }}</td>
                        <td>{{ $department->departmentcode }}</td>
                        <td>
                            <a href="{{ url('/department/edit/'.$department->id) }}" class="btn btn-sm btn-info">Edit</a>
                            <a href="{{ url('/department/delete/'.$department->id) }}" onclick="return confirm('Are you sure??');" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach

            </table>
        </div>
    </div>
@endsection