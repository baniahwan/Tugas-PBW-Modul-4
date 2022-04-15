<?php
    if(isset($_GET['konfirm']))
    {
        $nama = $_GET['nama'];
        $tempat = $_GET['tempat'];
        $tl = $_GET['tl'];
        $jk = $_GET['JK'];
        $alamat = $_GET['alamat'];
        $agama = $_GET['agama'];
        $wn = $_GET['wn'];
    }
    echo "BIODATA".
    "<br> Nama : ". $nama. 
    "<br> Tempat Tanggal Lahir : ".  $tempat. $tl.
    "<br> Jenis kelamin : ".  $jk.
    "<br> Alamat : ".  $alamat.
    "<br> Agama : ". $agama.
    "<br> Kewarganegaraan : ". $wn;
?>