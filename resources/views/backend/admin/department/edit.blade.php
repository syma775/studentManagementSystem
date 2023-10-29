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
                        <h3 style="text-align:center; margin:20px 0px;">Student Registration Form</h3>

                        <div class="card-body">
                            <form action="{{ url('/department/detail/update/'.$department->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>Department Name</label>
                                    <input type="text" class="form-control" name="departmentname" value="{{ $department->departmentname }}" placeholder="Enter Department Name"/>
                                </div>

                                <div class="form-group">
                                    <label>Department Code</label>
                                    <input type="text" class="form-control" name="departmentcode" value="{{ $department->departmentcode }}"  placeholder="Enter Department Code"/>
                                </div>

                                <button type="submit" class="btn btn-block btn-success">Update</button>

                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </div>
@endsection