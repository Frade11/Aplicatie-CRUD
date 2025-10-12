<?php
session_start();

if(isset($_GET['id'])){
    $student_id = $_GET['id'];

    $_SESSION['curent_user_id'] = $student_id;
    header("Location: editare.php");
    exit;
}else{
    $_SESSION['curent_user_id'] = null;
    header("Location: editare.php");
    exit;
}

?>