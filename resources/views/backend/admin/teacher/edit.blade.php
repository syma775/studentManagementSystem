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
                        <h3 style="text-align:center; margin:20px 0px;">Teacher Update Form</h3>

                        <div class="card-body">
                            <form action="{{ url('/teacher/detail/update/'.$teacher->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" name="name"  value="{{ $teacher->name }}" placeholder="Enter Teacher Name"/>
                                </div>

                                <div class="form-group">
                                    <label>Contact</label>
                                    <input type="tel" class="form-control" name="contact" value="{{ $teacher->contact }}" placeholder="Enter Teacher contact Number"/>
                                </div>

                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" class="form-control" name="email" value="{{ $teacher->email }}" placeholder="Enter Email"/>
                                </div>

                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="text" class="form-control" name="password" value="{{ $teacher->password }}" placeholder="Enter Password"/>
                                </div>

                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="text" class="form-control" name="address" value="{{ $teacher->address }}" placeholder="Enter Teacher Address"/>
                                </div>

                                <div class="form-group">
                                    <label>Course you can take?</label>
                                    <select class="form-control"  name="course">
                                      <option selected disabled>Select A course</option>
                                      <option value="algorithm"@if($teacher->course == 'algorithm') selected @endif>Algorithm</option>
                                      <option value="database"@if($teacher->course == 'database') selected @endif>Database</option>
                                      <option value="operating_system"@if($teacher->course == 'operating_system') selected @endif>Operating System</option>
                                   </select>
                                </div>

                                <div class="form-group">
                                    <label>Gender</label>
                                    <select class="form-control"  name="gender">
                                      <option selected disabled>Select A Gender</option>
                                      <option value="male" @if($teacher->gender == 'male') selected @endif>Male</option>
                                      <option value="female"@if($teacher->gender == 'female') selected @endif>Female</option>
                                      <option value="n/a"@if($teacher->gender == 'n/a') selected @endif>N/A</option>
                                   </select>
                                </div>

                                <div class="form-group">
                                    <label>Qualification</label>
                                    <input type="text" class="form-control" name="qualification" value="{{ $teacher->qualification }}" placeholder="Enter qualification"/>
                                </div>

                                <div class="form-group">
                                    <label>Experience</label>
                                    <input type="text" class="form-control" name="experience" value="{{ $teacher->experience }}" placeholder="any experience of teaching?"/>
                                </div>

                                <div class="form-group">
                                    <label>Date of Birth</label>
                                    <input type="date" class="form-control" name="dob" value="{{ $teacher->dob }}" placeholder="Enter teacher date of birth"/>
                                </div>

                                <div class="form-group">
                                    <label>Religion</label>
                                    <input type="text" class="form-control" name="religion" value="{{ $teacher->religion }}"placeholder="Enter Religion"/>
                                </div>

                                
                                <div class="form-group">
                                    <label>Image</label>
                                    <input type="file" class="form-control" name="image"/>
                                    <img src="{{ asset('/teacherImage/'.$teacher->image) }}" height="80px" weight="80px"/>
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