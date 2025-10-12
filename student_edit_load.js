document.addEventListener('DOMContentLoaded', function(){
    fetch('redirect_to_edit.php').then(Response => Response.json())
    .then(student =>{
        if(student && student.IDELEV){
            document.getElementById('editName').value = student.NUMELE || '';
            document.getElementById('editLName').value = student.PRENUMELE || '';
            document.getElementById('editAdress').value = student.Adresa || '';
            document.getElementById('editEmail').value = student.Email || '';
            document.getElementById('editDate').value = student.DataNasterii || '';
            document.getElementById('editSex').value = student.SEX || '';
            document.getElementById('editAvg').value = student.NotaMedieBac || '';
        }
    })
    .catch(error =>{
        console.error('Eroare:', error);
    });
})  