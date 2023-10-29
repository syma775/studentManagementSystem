@extends('backend.master')

@section('content')
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    @if(session()->has('success'))
                      <div class="alert alert-success" style="color:green;">{{ session()->get('success') }}</div>
                    @endif
                    <div class="card">
                        <h3 style="text-align:center; margin:20px 0px;">Course Adding Form</h3>

                        <div class="card-body">
                            <form action="{{ url('/course/detail/store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>Course Name</label>
                                    <input type="text" class="form-control" name="name" placeholder="Enter Course Name"/>
                                </div>

                                <div class="form-group">
                                    <label>Course Credit</label>
                                    <input type="text" class="form-control" name="credit" placeholder="Enter Course Credit"/>
                                </div>

                                <div class="form-group">
                                    <label>Course Code</label>
                                    <input type="text" class="form-control" name="code" placeholder="Enter Course Code"/>
                                </div>

                                <div class="form-group">
                                <label>Department Name</label>
                                <select class="form-control"  name="department_id">
                                    <option selected disabled>Select A Department</option>
                                    @foreach($departments as $department)
                                      <option value="{{ $department->id }}">{{ $department->departmentname }}</option>
                                    @endforeach
                                    
                                </select>
                            </div>

                                <button type="submit" class="btn btn-block btn-success">Submit</button>

                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </div>
@endsection