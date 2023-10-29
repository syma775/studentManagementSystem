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
                        <h3 style="text-align:center; margin:20px 0px;">Student Course Adding Form</h3>

                        <div class="card-body">
                            <form action="{{ url('/student/course/store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>Course Name</label>
                                    <select class="form-control"  name="course_id">
                                    <option selected disabled>Select A Course Name</option>
                                    @foreach($courses as $course)
                                      <option value="{{ $course->id }}">{{ $course->name }}</option>
                                    @endforeach
                                    
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Course Credit</label>
                                    <select class="form-control"  name="course_credit">
                                    <option selected disabled>Select A Course Credit</option>
                                    @foreach($courses as $course)
                                      <option value="{{ $course->id }}">{{ $course->credit }}</option>
                                    @endforeach
                                    
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Course Code</label>
                                    <select class="form-control"  name="course_code">
                                    <option selected disabled>Select A Course Code</option>
                                    @foreach($courses as $course)
                                      <option value="{{ $course->id }}">{{ $course->code }}</option>
                                    @endforeach
                                    
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Course Duration</label>
                                    <input type="date" class="form-control" name="time" placeholder="Enter Course Duration"/>
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