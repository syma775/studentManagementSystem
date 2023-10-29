<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Teacher Login</title>
  <link rel="stylesheet"  href="{{ asset('/frontend/') }}/assets/css/teacherlogin.css"/>
</head>
<body>
<!-- partial:index.partial.html -->
<div class="container">
  <div class="box"></div>
  <div class="container-forms">
    <div class="container-info">
      <div class="info-item">
        <div class="table">
          <div class="table-cell">
            <p>
              Have an account?
            </p>
            <div class="btn">
              Log in
            </div>
          </div>
        </div>
      </div>
      <div class="info-item">
        <div class="table">
          <div class="table-cell">
            <p>
              <img src="{{ asset('/frontend/assets/') }}/images/teacher.jpg" height="100px" width="100px" style="border:2px solid white;border-radius:60px;"/> 
            </p>
            <div>
             <h3>Teacher</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-form ">
       
    
    @if(session()->has('success'))
					 <div class="alert alert-success" style="color:brown;"><p style="margin-left:10px">{{ session()->get('success') }}</p></div>
					@endif
					@if(session()->has('error'))
						<div class="alert alert-danger" style="color:green;">{{ session()->get('error') }}</div>
					@endif

        <form  action="{{ url('/teacher/login') }}" method="POST" style="margin-top:80px">
          @csrf
          <div class="form-group">
					  <label style="color:gray;margin-left:25px;margin-top:40px">Email</label>
					  <input name="email" placeholder="Email" type="text" />
					</div>
					<div class="form-group">
					  <label style="color:gray;margin-left:25px;">Password</label>
					  <input name="password" placeholder="Password" type="Password" class="form-control" />
					</div>
          <button type="submit" style="margin-left:110px; padding:15opx;background-color:pink;color:blue;border:none;width:90px;height:35px;margin-top40px;font-weight:bold">Log In</button>
        </form>
    </div>
  </div>
</div>
<!-- partial -->
  <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>

</body>
</html>
