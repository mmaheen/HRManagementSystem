



        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>Dashmin</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Jhon Doe</h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href=" {{ route('dashboard') }} " class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    {{-- <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Elements</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="button.html" class="dropdown-item">Buttons</a>
                            <a href="typography.html" class="dropdown-item">Typography</a>
                            <a href="element.html" class="dropdown-item">Other Elements</a>
                        </div>
                    </div> --}}
                    
                    <a href="{{route('organization')}}" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Organization</a>
                    <a href="{{route('employee.list')}}" class="nav-item nav-link"><i class="fa fa-users me-2"></i>Employees</a>
                    <a href="{{route('attendance.list')}}" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Attendance</a>
                    <a href="{{route('leave.list')}}" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Leave</a>
                    <a href="   " class="nav-item nav-link"><i class="fa fa-table me-2"></i>Leave Type</a>
                    <a href="{{route('department.list')}}" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Department</a>
                    <a href="{{route('designation')}}" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Designation</a>
                    <a href="{{route('roll.list')}}" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Role</a>
                    <a href="{{route('permission.list')}}" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Permission</a>
                    <a href="   " class="nav-item nav-link"><i class="fa fa-table me-2"></i>Role_Permission</a>
                    <a href="{{route('asset.list')}}" class="nav-item nav-link"><i class="fa fa-money-bill-alt me-2"></i>Assets</a>
                    <a href="{{route('notice.list')}}" class="nav-item nav-link"><i class="fa fa-bell me-2"></i>Notice</a>

                    
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->

