<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include('../includes/dbconnection.php');
include('../includes/session.php');
include('../includes/dataValues.php');
?>
<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php include 'includes/title.php';?>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">
    <link rel="shortcut icon" href="../assets/img/student-grade.png" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="../assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="../assets/css/style2.css">
    <link rel="stylesheet" href="CSS/index.css">
    <link href="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/jqvmap@1.5.1/dist/jqvmap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/weathericons@2.1.0/css/weather-icons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css" rel="stylesheet" />

    <style>
/* General reset */
body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif !important;
    color: #f5f5f5 !important;
    margin: 0;
    height: 100vh;
    background: 
        linear-gradient(rgba(187, 21, 26, 0.45), rgba(187, 21, 26, 0.45)),
        url('img/BCCI/BCCI_LANDING1.jpg') no-repeat center top fixed !important;
    background-size: cover !important;
    background-position: 140px -50px !important;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
}

/* Landing title */
#welcomeTitle {
    position: absolute;
    top: 45%;
    left: calc(50% + 150px); /* Move to right */
    transform: translate(-50%, -50%);
    font-size: 2rem;
    font-weight: bold;
    color: #fff;
    text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.4);
    border-radius: 10px;
    z-index: 3; /* Above blurred image */
    transition: opacity 0.4s ease;
}

/* Sidebar height fix */
#left-panel {
    height: 100vh;
}

/* Right panel stays normal */
#right-panel {
    min-height: 100vh;
    position: relative;
    background: none !important;
}

/* Background welcome image */
#welcomeImage {
    display: block;
    position: absolute;
    top: 70px;
    left: 280px;
    width: calc(100% - 280px);
    height: calc(100vh - 70px);
    background: url('img/BCCI/BCCI_LANDING1.jpg') no-repeat center top;
    background-size: cover;
    background-attachment: fixed;
    filter: blur(6px);
    z-index: 1;
}

/* Dashboard container */
#dashboardContent {
    display: none;
    position: relative;
    z-index: 2;
}

#dashboardContent .content {
    background: rgba(255, 255, 255, 0.95);
    padding: 30px;
    border-radius: 10px;
    margin: 0px;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
}

/* Footer */
footer {
    position: fixed;
    bottom: 0;
    left: 280px;
    width: calc(100% - 280px);
    background-color: rgba(255, 255, 255, 0.95);
    text-align: center;
    padding: 5px 0 !important;
    font-size: 14px;
    z-index: 10;
    color: #555;
    border-top: 0px solid #ddd;
    box-shadow: 0 -1px 5px rgba(0,0,0,0.1);
}

/* Card rounded corners */
.card {
    border-radius: 15px;
}
    </style>
</head>

<body>
    <!-- Landing Title -->
    <h1 id="welcomeTitle">STUDENT RECORD SYSTEM</h1>

    <!-- Left Panel -->
    <?php $page="dashboard"; include 'includes/leftMenu.php';?>

    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <?php include 'includes/header.php';?>

        <!-- 🔹 Background image -->
        <div id="welcomeImage"></div>

        <!-- 🔹 Dashboard content -->
        <div id="dashboardContent">
            <div class="content">
                <div class="animated fadeIn">
                    <div class="row">

                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body"></div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-3">
                            <div class="card text-white bg-flat-color-2">
                                <div class="card-body">
                                    <div class="card-left pt-1 float-left">
                                        <h3 class="mb-0 fw-r"><span class="count"><?php echo $countFaculty;?></span></h3>
                                        <p class="text-light mt-1 m-0">Instructor</p>
                                    </div>
                                    <div class="card-right float-right text-right"><i class="icon fade-5 icon-lg pe-7s-keypad"></i></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-3">
                            <div class="card text-white bg-flat-color-3">
                                <div class="card-body">
                                    <div class="card-left pt-1 float-left">
                                        <h3 class="mb-0 fw-r"><span class="count"><?php echo $countDepartment;?></span></h3>
                                        <p class="text-light mt-1 m-0">Department</p>
                                    </div>
                                    <div class="card-right float-right text-right"><i class="icon fade-5 icon-lg pe-7s-network"></i></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-3">
                            <div class="card text-white bg-flat-color-5">
                                <div class="card-body">
                                    <div class="card-left pt-1 float-left">
                                        <h3 class="mb-0 fw-r"><span class="count"><?php echo $countAllStudent;?></span></h3>
                                        <p class="text-light mt-1 m-0">Student</p>
                                    </div>
                                    <div class="card-right float-right text-right"><i class="icon fade-5 icon-lg pe-7s-users"></i></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-3">
                            <div class="card text-white bg-info">
                                <div class="card-body">
                                    <div class="card-left pt-1 float-left">
                                        <h3 class="mb-0 fw-r"><span class="count"><?php echo $countAllLevel;?></span></h3>
                                        <p class="text-light mt-1 m-0">Level</p>
                                    </div>
                                    <div class="card-right float-right text-right"><i class="icon fade-5 icon-lg pe-7s-server"></i></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-3">
                            <div class="card text-white bg-danger">
                                <div class="card-body">
                                    <div class="card-left pt-1 float-left">
                                        <h3 class="mb-0 fw-r"><span class="count"><?php echo $countAllSemester;?></span></h3>
                                        <p class="text-light mt-1 m-0">Semester</p>
                                    </div>
                                    <div class="card-right float-right text-right"><i class="icon fade-5 icon-lg pe-7s-culture"></i></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-3">
                            <div class="card text-white bg-primary">
                                <div class="card-body">
                                    <div class="card-left pt-1 float-left">
                                        <h3 class="mb-0 fw-r"><span class="count"><?php echo $countAllDist;?></span></h3>
                                        <p class="text-light mt-1 m-0">Trimester</p>
                                    </div>
                                    <div class="card-right float-right text-right"><i class="icon fade-5 icon-lg pe-7s-gleam"></i></div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h3 align="center">
                                        <marquee direction="left">School Year:
                                            <?php 
                                            $result = mysqli_query($con, 'SELECT (sessionName) AS sessname FROM tblsession WHERE isActive = 1'); 
                                            $row = mysqli_fetch_assoc($result); 
                                            echo $row['sessname'];
                                            ?>
                                        </marquee>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include 'includes/footer.php';?>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="../assets/js/main.js"></script>

    <script>
    $(document).ready(function() {
        const welcomeImage = $('#welcomeImage');
        const dashboardContent = $('#dashboardContent');
        const welcomeTitle = $('#welcomeTitle');

        // Show image + title initially
        welcomeImage.show();
        welcomeTitle.show();
        dashboardContent.hide();

        // When sidebar link is clicked
        $('a').on('click', function(e) {
            const href = $(this).attr('href');
            if (href && (href.includes('index.php') || href.includes('faculty') || href.includes('department') || href.includes('student'))) {
                e.preventDefault();
                welcomeImage.fadeOut(300);
                welcomeTitle.fadeOut(300, function() {
                    dashboardContent.fadeIn(300);
                });
            }
        });
    });
    </script>
</body>
</html>
