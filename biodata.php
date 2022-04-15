<form action="outputbio.php" method="GET">
<h2><u>BIODATA</u></h2>
<table>
<tr><td>Nama :</td> <td><input type="text" name="nama"></td></tr>
<tr><td>TTL :</td> <td><input type="text" name="tempat" size="10"><input type="date" size="30" name="tl"></td></tr>
<tr><td>Jenis Kelamin :</td> <td><input type="radio" name="JK" value="Laki-laki"> Laki-laki
<input type="radio" name="JK" value="Perempuan"> Perempuan</td></tr>
<tr><td>Alamat :</td> <td><textarea name="alamat" row="5" cols="31"></textarea></td></tr>
<tr><td>Agama :</td> <td><select name="agama">
   <option value="Islam" selected> Islam</option>
            <option value="Kristen"> Kristen</option>
            <option value="Budha"> Budha</option>
            <option value="Hindu"> Hindu</option>
            <option value="Yahudi"> Yahudi</option>
            </select></td></tr>
<tr><td>Kewarganegaraan :</td> <td><input type="text" size="30" name="wn" /></td></tr>
<tr><td></td><td><input type="submit" name="konfirm" Value="Submit">
</table>
</form>