<?php
include("conection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Students</title>
</head>
<body>
<?php
if(isset($_GET['success'])):?>
<div class="message" id="succesMsg">Operatia a fost efectuata cu succes!</div>
<script>
    setTimeout(() => {
        const msg = document.getElementById('succesMsg');
        if(msg){
            msg.style.opacity = 0;
            
            if(history.replaceState){
                const url = new URL(window.location);
                url.searchParams.delete('success');
                window.history.replaceState({}, document.title, url.toString());
            }
            setTimeout(() => msg.remove(), 500);
        }
    }, 3000);
</script>
<?php elseif(isset($_GET['error'])): ?>
    <div class="message error" id="errorMsg">A aparut o eroare in operatie</div>
    <script>
        setTimeout(() =>{
            const msg = document.getElementById('errorMsg');
            if(msg){
                msg.style.opacity = 0;

                if(history.replaceState){
                    const url = new URL(window.location);
                    url.searchParams.delete('error');
                    window.history.replaceState({}, document.title, url.toString());
                }
                setTimeout(() => {
                   msg.remove(); 
                }, 500);
            };
        }, 3000);
    </script>
<?php endif; ?>
    <div class="table-container">
    <h2>Students table</h2>
    <button onclick="location.href = 'add_elev.php'">Adauga elev</button>
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
        echo '<td>';
        echo '<a href="redirect_to_edit.php?id=' . $row['IDELEV'] . '">';
        echo  '<img src = "images/edit.png" class = "edit">' ;
        echo '</a>';
        echo '<a href="redirect_to_clear.php?id=' . $row['IDELEV'] . '">';
        echo  '<img src = "images/clear.png" class = "clear">';
        echo '</a>';
        echo '</td>';
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