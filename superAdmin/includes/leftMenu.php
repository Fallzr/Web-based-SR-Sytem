<?php
$staffId = $_SESSION['staffId'];
$query = mysqli_query($con,"select * from tbladmin where staffId='$staffId'");
$row = mysqli_fetch_array($query);
$staffFullName = $row['firstName'].' '.$row['lastName'];
?>
<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">
        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="menu-title">Regs: &nbsp;&nbsp;&nbsp;<?php echo $staffFullName;?></li>

                <li>
                    <a href="#"><i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                </li>

                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false"><i class="menu-icon fa fa-cogs"></i>School Year</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-plus"></i> <a href="#">Add New Session</a></li>
                    </ul>
                </li>

                <li class="menu-title">Faculty and Dept.</li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false"><i class="menu-icon fa fa-th"></i>Faculty</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-plus"></i> <a href="#">Add New Faculty</a></li>
                        <li><i class="fa fa-eye"></i> <a href="#">View Faculty</a></li>
                    </ul>
                </li>

             <li class="menu-title">Tuition Fee</li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false"><i class="menu-icon fa fa-money"></i> View Tuitions</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-graduation-cap"></i> <a href="#">Student Tuitions</a></li>
                    </ul>
                </li>


                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false"><i class="menu-icon fa fa-bars"></i>Departments</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-plus"></i> <a href="#">Add New Dept.</a></li>
                        <li><i class="fa fa-eye"></i> <a href="#">View Department</a></li>
                    </ul>
                </li>

                <li class="menu-title">Student Section</li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false"><i class="menu-icon fa fa-users"></i>Student</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-plus"></i> <a href="#">Add New Student</a></li>
                        <li><i class="fa fa-eye"></i> <a href="#">View Student</a></li>
                    </ul>
                </li>

                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false"><i class="menu-icon fa fa-book"></i>Courses</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-plus"></i> <a href="#">Add New Course</a></li>
                        <li><i class="fa fa-eye"></i> <a href="#">View Courses</a></li>
                    </ul>
                </li>

                <li class="menu-title">Results and Grading</li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false"><i class="menu-icon fa fa-file"></i>Result</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-plus"></i> <a href="#">Compute GPA</a></li>
                        <li><i class="fa fa-plus"></i> <a href="#">Compute CGPA</a></li>
                        <li><i class="fa fa-plus"></i> <a href="#">View/Print Result</a></li>
                        <li><i class="fa fa-plus"></i> <a href="#">View Grading Criteria</a></li>
                    </ul>
                </li>

                <li class="menu-title">Account</li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false"><i class="menu-icon fa fa-user-circle"></i>Profile</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-user"></i> <a href="#">Update Profile</a></li>
                    </ul>
                </li>

                <li>
                    <a href="#"><i class="menu-icon fa fa-power-off"></i>Logout </a>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
    <link rel="stylesheet" href="CSS/leftmenu.css">
</aside>
