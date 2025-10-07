<?php
session_start();
include('includes/dbconnection.php');

if(isset($_POST['login'])){
    $matricNo = $_POST['matricNo'];
    $password = md5(strtolower($_POST['password']));

    $query = mysqli_query($con,"SELECT * FROM tblstudent WHERE matricNo='$matricNo' AND password='$password'");
    $row = mysqli_fetch_array($query);

    if(mysqli_num_rows($query) > 0){
        $_SESSION['matricNo'] = $row['matricNo'];
        $_SESSION['firstName'] = $row['firstName'];
        $_SESSION['lastName'] = $row['lastName'];

        header("Location: student/index.php");
        exit();
    } else {
        $_SESSION['studentError'] = "Invalid Username/Password!";
        header("Location: index.php#studentLoginModal");
        exit();
    }
}
