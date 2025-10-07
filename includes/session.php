<?php
include('dbconnection.php');

// safe session start
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// if admin/staff is logged in
if (isset($_SESSION['staffId'])) {
    $staffId = $_SESSION['staffId'];
}
// if student is logged in
else if (isset($_SESSION['matricNo'])) {
    $matricNo = $_SESSION['matricNo'];
}
// if nobody is logged in → send back to login
else {
    header("Location: ../index.php");
    exit();
}

/*
// OPTIONAL: session expiry after 30 mins
$expiry = 1800; // 30 minutes
if (isset($_SESSION['LAST']) && (time() - $_SESSION['LAST'] > $expiry)) {
    session_unset();
    session_destroy();
    header("Location: ../index.php");
    exit();
}
$_SESSION['LAST'] = time();
*/
?>
