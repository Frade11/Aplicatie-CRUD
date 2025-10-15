<?php
session_start();
include "conection.php"; 

if(isset($_GET['id'])){
    $deleteUser = $_GET['id'];

    $stmt = mysqli_prepare($conection, "DELETE FROM elevi WHERE IDELEV = ?");
    mysqli_stmt_bind_param($stmt, "i", $deleteUser);
    mysqli_stmt_execute($stmt);

    if(mysqli_stmt_affected_rows($stmt) > 0){
    $_SESSION['message'] = "User deleted";
    } else {
    $_SESSION['message'] = "User didnt found";
    }
    mysqli_stmt_close($stmt);
    header("Location: index.php?success=1");
    exit;
}else {
    $_SESSION['message'] = "Id is not specified";
    header("Location: index.php?error=1");
    exit;
}


?>