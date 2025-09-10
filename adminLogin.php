<?php
session_start();
include('includes/dbconnection.php');

if(isset($_POST['login'])){
    $staffId = $_POST['staffId'];
    $password = md5($_POST['password']);

    $query = mysqli_query($con,"SELECT * FROM tbladmin WHERE staffId='$staffId' AND password='$password'");
    $row = mysqli_fetch_array($query);

    if(mysqli_num_rows($query) > 0){
        $_SESSION['staffId'] = $row['staffId'];
        $_SESSION['emailAddress'] = $row['emailAddress'];
        $_SESSION['firstName'] = $row['firstName'];
        $_SESSION['lastName'] = $row['lastName'];
        $_SESSION['adminTypeId'] = $row['adminTypeId'];

        if($row['adminTypeId'] == 1){
            header("Location: superAdmin/index.php");
        } else {
            header("Location: admin/index.php");
        }
        exit();
    } else {
        $_SESSION['adminError'] = "Invalid Username/Password!";
        header("Location: index.php#adminLoginModal");
        exit();
    }
}
