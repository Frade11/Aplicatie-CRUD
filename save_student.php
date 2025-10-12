<?php
include("conection.php");

$id = isset($_POST['id']) ? $_POST['id'] : null;
$numele = $_POST['numele'];
$prenumele = $_POST['prenumele'];
$adresa = $_POST['adresa'];
$email = $_POST['email'];
$datanasterii = $_POST['datanasterii'];
$sex = $_POST['sex'];
$notamediebac = $_POST['notamediebac'];

if($id) {
    $sql = "UPDATE elevi SET 
            NUMELE = ?, 
            PRENUMELE = ?, 
            Adresa = ?, 
            Email = ?, 
            DataNasterii = ?, 
            SEX = ?, 
            NotaMedieBac = ? 
            WHERE IDELEV = ?";
    
    $stmt = mysqli_prepare($conection, $sql);
    mysqli_stmt_bind_param($stmt, "ssssssdi", 
        $numele, $prenumele, $adresa, $email, $datanasterii, $sex, $notamediebac, $id);
} else {
    // НЕТ ID - добавляем нового ученика
    $sql = "INSERT INTO elevi (NUMELE, PRENUMELE, Adresa, Email, DataNasterii, SEX, NotaMedieBac) 
            VALUES (?, ?, ?, ?, ?, ?, ?)";
    
    $stmt = mysqli_prepare($conection, $sql);
    mysqli_stmt_bind_param($stmt, "ssssssd", 
        $numele, $prenumele, $adresa, $email, $datanasterii, $sex, $notamediebac);
}

// Выполняем запрос
if(mysqli_stmt_execute($stmt)) {
    // Успешно - возвращаем на главную
    header("Location: index.php");
} else {
    echo "Eroare la salvare: " . mysqli_error($conection);
}

mysqli_stmt_close($stmt);
mysqli_close($conection);
?>