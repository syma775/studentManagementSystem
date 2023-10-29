<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/admin/dashboard') }}">
        <div class="sidebar-brand-text mx-3">Admin</div>
    </a>

<!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="{{ url('/admin/dashboard') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span>
            </a>
        </li>

<!-- Divider -->
<hr class="sidebar-divider">


<!-- Nav Item - Pages Collapse Menu -->
<!--------Students----->
<li class="nav-item">
    <a class="nav-link collapsed" id="collapseTwo" href="#" data-toggle="collapse" data-target="#collapseTwo"
        aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-cog"></i>
        <span>Students</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item"  href="{{url('/students/add') }}">Add</a>
            <a class="collapse-item" href="{{ url('/students/list') }}">Students List</a>
        </div>
    </div>


<!--------Teachers----->

<li class="nav-item">
    <a class="nav-link collapsed" id="collapseTwo" href="#" data-toggle="collapse" data-target="#techers"
        aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-cog"></i>
        <span>Teachers</span>
    </a>
    <div id="techers" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item"  href="{{url('/teachers/add') }}">Add</a>
            <a class="collapse-item" href="{{ url('/teachers/list') }}">Teachers List</a>
        </div>
    </div>

        <!--------department----->

<li class="nav-item">
    <a class="nav-link collapsed" id="collapseTwo" href="#" data-toggle="collapse" data-target="#department"
        aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-cog"></i>
        <span>Department</span>
    </a>
    <div id="department" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item"  href="{{url('/department/add') }}">Add</a>
            <a class="collapse-item" href="{{ url('/department/list') }}">Department List</a>
        </div>
    </div>

    <!--------coursess----->

<li class="nav-item">
    <a class="nav-link collapsed" id="collapseTwo" href="#" data-toggle="collapse" data-target="#course"
        aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-cog"></i>
        <span>Course</span>
    </a>
    <div id="course" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item"  href="{{url('/course/add') }}">Add</a>
            <a class="collapse-item" href="{{ url('/course/list') }}">Course List</a>
        </div>
    </div>

     <!--------student coursess----->

<li class="nav-item">
    <a class="nav-link collapsed" id="collapseTwo" href="#" data-toggle="collapse" data-target="#studentcourse"
        aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-cog"></i>
        <span>Students Course</span>
    </a>
    <div id="studentcourse" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item"  href="{{url('/studentcourse/add') }}">Add</a>
            <a class="collapse-item" href="{{ url('/studentcourse/list') }}">Course List</a>
        </div>
    </div>

    <!--------Classes----->

<li class="nav-item">
    <a class="nav-link collapsed" id="collapseTwo" href="#" data-toggle="collapse" data-target="#classes"
        aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-cog"></i>
        <span>Class</span>
    </a>
    <div id="classes" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item"  href="{{url('/class/add') }}">Add</a>
            <a class="collapse-item" href="{{ url('/class/manage') }}">Maintain</a>
        </div>
    </div>


    <!--------Attendence----->

<li class="nav-item">
    <a class="nav-link collapsed" id="collapseTwo" href="#" data-toggle="collapse" data-target="#attendence"
        aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-cog"></i>
        <span>Attendence</span>
    </a>
    <div id="attendence" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item"  href="{{url('/attendenc/create') }}">Create</a>
            <a class="collapse-item" href="{{ url('/attendenc/manage') }}">Manage</a>
        </div>
    </div>

    <!--------Gradebook----->

<li class="nav-item">
    <a class="nav-link collapsed" id="collapseTwo" href="#" data-toggle="collapse" data-target="#gradebook"
        aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-cog"></i>
        <span>Teachers</span>
    </a>
    <div id="gradebook" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item"  href="{{url('/gradebook/create') }}">Create</a>
            <a class="collapse-item" href="{{ url('/gradebook/manage') }}">Manage</a>
        </div>
    </div>



</ul>