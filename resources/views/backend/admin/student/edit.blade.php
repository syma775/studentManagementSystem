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
                            <form action="{{ url('/student/detail/update/'.$student->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" name="name" value="{{ $student->name }}" placeholder="Enter Student Name"/>
                                </div>

                                <div class="form-group">
                                    <label>Father Name</label>
                                    <input type="text" class="form-control" name="fathername" value="{{ $student->fathername }}" placeholder="Enter Student father Name"/>
                                </div>

                                <div class="form-group">
                                    <label>Mother Name</label>
                                    <input type="text" class="form-control" name="mothername" value="{{ $student->mothername }}" placeholder="Enter Student mother Name"/>
                                </div>

                                <div class="form-group">
                                    <label>Phone</label>
                                    <input type="tel" class="form-control" name="phone" value="{{ $student->phone }}" placeholder="Enter Student Phone Number"/>
                                </div>

                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" class="form-control" name="email" value="{{ $student->email }}" placeholder="Enter Email"/>
                                </div>

                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="text" class="form-control" name="address" value="{{ $student->name }}" placeholder="Enter Student Address"/>
                                </div>

                                <div class="form-group">
                                    <label>Semester</label>
                                    <select class="form-control"  name="semester">
                                      <option selected disabled>Select A Semester</option>
                                      <option value="1"@if($student->semester == '1') selected @endif>1st semester</option>
                                      <option value="2"@if($student->semester == '2') selected @endif>2nd semester</option>
                                      <option value="3"@if($student->semester == '3') selected @endif>3rd semester</option>
                                      <option value="4"@if($student->semester == '4') selected @endif>4th semester</option>
                                      <option value="5"@if($student->semester == '5') selected @endif>5th semester</option>
                                      <option value="6"@if($student->semester == '6') selected @endif>6th semester</option>
                                      <option value="7"@if($student->semester == '7') selected @endif>7th semester</option>
                                      <option value="8"@if($student->semester == '8') selected @endif>8th semester</option>
                                   </select>
                                </div>

                                 <div class="form-group">
                                    <label>Degree Program</label>
                                    <select class="form-control"  name="degree">
                                      <option selected disabled>Select A Department</option>
                                      <option value="bba" @if ($student->degree == 'bba') selected @endif>BBA</option>
                                      <option value="cse" @if ($student->degree == 'cse') selected @endif>B.Sc in Computer Sceince Engineering</option>
                                      <option value="eee" @if ($student->degree == 'eee') selected @endif>B.Sc in Electrical Science Engineering</option>
                                      <option value="ae"  @if ($student->degree == 'ae') selected @endif>B.Sc in ARCHITECTURE ENGINEERING</option>
                                      <option value="eng" @if ($student->degree == 'eng') selected @endif>English</option>
                                      <option value="bio" @if ($student->degree == 'bio') selected @endif>Biochemistry</option>
                                      <option value="mbbs"@if ($student->degree == 'mbbs') selected @endif>MBBS</option>
                                      <option value="phara"@if ($student->degree == 'phara') selected @endif>Pharamacy</option>
                                   </select>
                                </div>

                                <div class="form-group">
                                    <label>Date of Birth</label>
                                    <input type="date" class="form-control" name="dob" value="{{ $student->dob }}" placeholder="Enter Student Name"/>
                                </div>

                                <div class="form-group">
                                    <label>Religion</label>
                                    <input type="text" class="form-control" name="religion" value="{{ $student->religion }}" placeholder="Enter Religion"/>
                                </div>

                                
                                <div class="form-group">
                                    <label>Image</label>
                                    <input type="file" class="form-control" name="image"/>
                                    <img src="{{ asset('/studentImage/'.$student->image) }}" height="80px" weight="80px"/>
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