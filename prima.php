<form method="POST">
<h2><u>Cek Bilangan Prima</u></h2>
Masukkan Angka :
<input type="text" name="bil">
<br>
<br>
<input type="submit" name="konfirm" value="CEK">
</form>

<?php
if(isset($_POST['konfirm'])){
    $bil = $_POST['bil'];
    $prima = "prima";
    for ($i=2; $i<=$bil-1; $i++){
        if ($bil % $i == 0){
            $prima = "bukan prima";
        break;       
        }
    }
    echo "Bilangan ".$bil." adalah ". "bilangan ".$prima;
}

?>