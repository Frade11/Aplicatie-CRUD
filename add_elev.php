<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="editStyle.css">
    <title>Adauga elev</title>
</head>
<body>
     <div class="container">
        <div class="open-table" onclick="location.href='index.php'">
            <img src="images/left-arrow.png" alt="">
            <span>Lista elevi</span>
        </div>
        <form action="save_student.php" method="POST">
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