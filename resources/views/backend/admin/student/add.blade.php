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
                            <form action="{{ url('/student/detail/store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" name="name" placeholder="Enter Student Name"/>
                                </div>

                                <div class="form-group">
                                    <label>Father Name</label>
                                    <input type="text" class="form-control" name="fathername" placeholder="Enter Student father Name"/>
                                </div>

                                <div class="form-group">
                                    <label>Mother Name</label>
                                    <input type="text" class="form-control" name="mothername" placeholder="Enter Student mother Name"/>
                                </div>

                                <div class="form-group">
                                    <label>Phone</label>
                                    <input type="tel" class="form-control" name="phone" placeholder="Enter Student Phone Number"/>
                                </div>

                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" class="form-control" name="email" placeholder="Enter Email"/>
                                </div>

                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="text" class="form-control" name="address" placeholder="Enter Student Address"/>
                                </div>

                                <div class="form-group">
                                    <label>Semester</label>
                                    <select class="form-control"  name="semester">
                                      <option selected disabled>Select A Semester</option>
                                      <option value="1">1st semester</option>
                                      <option value="2">2nd semester</option>
                                      <option value="3">3rd semester</option>
                                      <option value="4">4th semester</option>
                                      <option value="5">5th semester</option>
                                      <option value="6">6th semester</option>
                                      <option value="7">7th semester</option>
                                      <option value="8">8th semester</option>
                                   </select>
                                </div>

                                 <div class="form-group">
                                    <label>Degree Program</label>
                                    <select class="form-control"  name="degree">
                                      <option selected disabled>Select A Department</option>
                                      <option value="bba">BBA</option>
                                      <option value="cse">B.Sc in Computer Sceince Engineering</option>
                                      <option value="eee">B.Sc in Electrical Science Engineering</option>
                                      <option value="ae">B.Sc in ARCHITECTURE ENGINEERING</option>
                                      <option value="eng">English</option>
                                      <option value="bio">Biochemistry</option>
                                      <option value="mbbs">MBBS</option>
                                      <option value="phara">Pharamacy</option>
                                   </select>
                                </div>

                                <div class="form-group">
                                    <label>Date of Birth</label>
                                    <input type="date" class="form-control" name="dob" placeholder="Enter Student Name"/>
                                </div>

                                <div class="form-group">
                                    <label>Religion</label>
                                    <input type="text" class="form-control" name="religion" placeholder="Enter Religion"/>
                                </div>

                                
                                <div class="form-group">
                                    <label>Image</label>
                                    <input type="file" class="form-control" name="image"/>
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