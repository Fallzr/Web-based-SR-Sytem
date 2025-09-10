<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// ------------------- STUDENT SECTION -------------------
if (isset($matricNo)) {
    $query = mysqli_query($con,"SELECT * FROM tblstudent WHERE matricNo='$matricNo'");
    if ($query && mysqli_num_rows($query) > 0) {
        $row = mysqli_fetch_array($query);
        $departmentId = $row['departmentId'];
        $facultyId    = $row['facultyId'];
        $levelId      = $row['levelId'];

        // Department
        $que = mysqli_query($con,"SELECT * FROM tbldepartment WHERE Id='$departmentId'");
        if ($que) {
            $row = mysqli_fetch_array($que);
            $departmentName = $row['departmentName'] ?? "";
        }

        // Faculty
        $que = mysqli_query($con,"SELECT * FROM tblfaculty WHERE Id='$facultyId'");
        if ($que) {
            $row = mysqli_fetch_array($que);
            $facultyName = $row['facultyName'] ?? "";
        }

        // Student courses
        $studCourse = mysqli_query($con,"SELECT * FROM tblcourse WHERE departmentId='$departmentId'");
        $coutAllStudentCourses = mysqli_num_rows($studCourse);

        // Student results
        $queResult = mysqli_query($con,"SELECT * FROM tblfinalresult WHERE matricNo='$matricNo'");
        $countAllStudResult = mysqli_num_rows($queResult);
    }
}

// ------------------- ADMIN / SUPER ADMIN SECTION -------------------

// Students by faculty + department
if (isset($facultyId) && isset($departmentId)) {
    $queryStudent = mysqli_query($con,"SELECT * FROM tblstudent WHERE facultyId='$facultyId' AND departmentId='$departmentId'");
    $adminCountStudent = mysqli_num_rows($queryStudent);

    $queryCourses = mysqli_query($con,"SELECT * FROM tblcourse WHERE facultyId='$facultyId' AND departmentId='$departmentId'");
    $adminCountCourses = mysqli_num_rows($queryCourses);

    // Lecturer section
    $lecCourse = mysqli_query($con,"SELECT * FROM tblcourse WHERE departmentId='$departmentId'");
    $countLecCourse = mysqli_num_rows($lecCourse);

    $que = mysqli_query($con,"SELECT * FROM tblassignedstaff WHERE departmentId='$departmentId'");
    $lecCountStaff = mysqli_num_rows($que);
}

// Super Admin counts
$admin = mysqli_query($con,"SELECT * FROM tbladmin WHERE adminTypeId='2'");
$countAdmin = mysqli_num_rows($admin);

$todaysAtt = mysqli_query($con,"SELECT * FROM tblattendance WHERE DATE(DateTaken)=CURDATE()");
$countTodaysAttendance = mysqli_num_rows($todaysAtt);

$allAtt = mysqli_query($con,"SELECT * FROM tblattendance");
$countAllAttendance = mysqli_num_rows($allAtt);

$staffQuery = mysqli_query($con,"SELECT * FROM tblstaff");
$countAllStaff = mysqli_num_rows($staffQuery);

$departmentQuery = mysqli_query($con,"SELECT * FROM tbldepartment");
$countDepartment = mysqli_num_rows($departmentQuery);

$facultyQuery = mysqli_query($con,"SELECT * FROM tblfaculty");
$countFaculty = mysqli_num_rows($facultyQuery);

$studentQuery = mysqli_query($con,"SELECT * FROM tblstudent");
$countAllStudent = mysqli_num_rows($studentQuery);

$courseQuery = mysqli_query($con,"SELECT * FROM tblcourse");
$countAllCourses = mysqli_num_rows($courseQuery);

$courseSession = mysqli_query($con,"SELECT * FROM tblsession");
$countAllSession = mysqli_num_rows($courseSession);

$resultComputed = mysqli_query($con,"SELECT * FROM tblfinalresult");
$countAllComputed = mysqli_num_rows($resultComputed);

$levelQue = mysqli_query($con,"SELECT * FROM tbllevel");
$countAllLevel = mysqli_num_rows($levelQue);

$semesterQue = mysqli_query($con,"SELECT * FROM tblsemester");
$countAllSemester = mysqli_num_rows($semesterQue);

$distinctno = mysqli_query($con,"SELECT * FROM tblfinalresult WHERE classOfDiploma='Distinction'");
$countAllDist = mysqli_num_rows($distinctno);

$uppercred = mysqli_query($con,"SELECT * FROM tblfinalresult WHERE classOfDiploma='Upper Credit'");
$countAllUpc = mysqli_num_rows($uppercred);

$lowercred = mysqli_query($con,"SELECT * FROM tblfinalresult WHERE classOfDiploma='Lower Credit'");
$countAlllc = mysqli_num_rows($lowercred);

$justpass = mysqli_query($con,"SELECT * FROM tblfinalresult WHERE classOfDiploma='Pass'");
$countAlljp = mysqli_num_rows($justpass);

$failed = mysqli_query($con,"SELECT * FROM tblfinalresult WHERE classOfDiploma='Fail'");
$countAllf = mysqli_num_rows($failed);
?>
