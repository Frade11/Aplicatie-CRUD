<?php
include("conection.php");

if($_SERVER['REQUEST_METHOD']=='POST'){
    $id = $_POST['id'];
    $numele = $_POST['numele'];
    $prenumele = $_POST['prenumele'];
    $adresa = $_POST['adresa'];
    $email = $_POST['email'];
    $datanasterii = $_POST['datanasterii'];
    $sex = $_POST['sex'];
    $notamediebac = $_POST['notamediebac'];

    if($id) {
    $sql = "UPDATE elevi SET NUMELE=?, PRENUMELE=?, Adresa=?, Email=?, DataNasterii=?, SEX=?, NotaMedieBac=? WHERE IDELEV=?";
    $stmt = mysqli_prepare($conection, $sql);
    mysqli_stmt_bind_param($stmt, "ssssssdi", $numele, $prenumele, $adresa, $email, $datanasterii, $sex, $notamediebac, $id);
} else {
    $sql = "INSERT INTO elevi (NUMELE, PRENUMELE, Adresa, Email, DataNasterii, SEX, NotaMedieBac) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($conection, $sql);
    mysqli_stmt_bind_param($stmt, "ssssssd", $numele, $prenumele, $adresa, $email, $datanasterii, $sex, $notamediebac);
}
    mysqli_stmt_execute($stmt);
    header("Location: index.php");
    exit;
}

$student_id = isset($_GET['id']) ? $_GET['id'] : null;

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="editStyle.css">
    <script src="student_edit_load.js" defer></script>
    <title>Editare elev</title>
</head>
<body>
    <div class="container">
        <div class="open-table" onclick="location.href='index.php'">
            <img src="images/left-arrow.png" alt="">
            <span>Lista elevi</span>
        </div>
        <form action="edit.php" method="POST">
            <span class="Edit">Editare elev</span>
            <input type="hidden" id="studentId" name="id">
            <span>Nume</span> <input type="text" name = "numele" id="editName" required>
            <span>Prenume</span> <input type="text" name="prenumele" id="editLName" required>
            <span>Adresa</span> <input type="text" name="adresa" id="editAdress" required>
            <span>Email</span> <input type="email" name="email" id="editEmail" required>
            <span>Data nasterii</span> <input type="date" name="datanasterii" id="editDate" required>
            <span>Sex</span>
            <select name="sex" id="editSex" required> 
                <option value="">Selecteaza sex</option>
                <option value="M">Masculin</option>
                <option value="F">Feminin</option>
            </select>
            <span>Media BAC</span> <input type="number" name="notamediebac"  step="0.01" id="editAvg" required>
            <input type="submit" value="Salveaza modificari">
        </form>
    </div>
</body>
</html>
<?php mysqli_close($conection);