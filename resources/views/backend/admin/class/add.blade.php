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
                        <h3 style="text-align:center; margin:20px 0px;">Class Adding Form</h3>

                        <div class="card-body">
                            <form action="{{ url('/course/detail/store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>Class Name</label>
                                    <input type="text" class="form-control" name="classname" placeholder="Enter Class Name"/>
                                </div>

                                <div class="form-group">
                                    <label>Teacher incharge</label>
                                    <select class="form-control" name="teacher_id">
                                        <option selected disable>Chosse a Teacher Name</option>
                                        @foreach($teachers as $teacher)
                                           <option value="{{ $teacher->id }}">{{ $teacher->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>List of enrolled student</label>
                                    <input type="text" class="form-control" name="studentsname" placeholder="Enter Class Name"/>
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