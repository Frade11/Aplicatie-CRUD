<?php
include("conection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students</title>
</head>
<body>
    <div class="table-container">
    <h2>Students table</h2>
    <table border="1">
        <tr>
            <th>Numele</th>
            <th>Prenumele</th>
            <th>Adresa</th>
            <th>Email</th>
            <th>Data Nasterii</th>
            <th>Sex</th>
            <th>Media BAC</th>
            <th>Actiune</th>
        </tr>
<?php
$sql = "SELECT IDELEV, NUMELE, PRENUMELE, Adresa, Email, DataNasterii, SEX, NotaMedieBac FROM elevi";
$result = mysqli_query($conection,$sql);
if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        echo '<tr>';
        echo '<td>' . $row['NUMELE'] . '</td>';
        echo '<td>' . $row['PRENUMELE'] . '</td>';
        echo '<td>' . $row['Adresa'] . '</td>';
        echo '<td>' . $row['Email'] . '</td>';
        echo '<td>' . $row['DataNasterii'] . '</td>';
        echo '<td>' . $row['SEX'] . '</td>';
        echo '<td>' . $row['NotaMedieBac'] . '</td>';
        echo '</tr>';
    }
}
else{
    echo 'error';
}
echo '</table>';

mysqli_close($conection);
?>
</div>

</body>
</html>