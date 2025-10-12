<?php
session_start();
include("conection.php");

header('Content-Type: application/json');

if(isset($_SESSION['curent_user_id']) && $_SESSION['curent_user_id']) {
    $student_id = $_SESSION['curent_user_id'];
    
    $sql = "SELECT * FROM elevi WHERE IDELEV = ?";
    $stmt = mysqli_prepare($conection, $sql);
    mysqli_stmt_bind_param($stmt, "i", $student_id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $student = mysqli_fetch_assoc($result);
    
    unset($_SESSION['curent_user_id']);
    
    echo json_encode($student);
} else {
    echo json_encode(null);
}

mysqli_close($conection);
?>