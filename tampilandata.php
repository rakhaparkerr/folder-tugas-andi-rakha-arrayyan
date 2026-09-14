<?php

require_once('connection.php');


$squeryData = "SELECT * FROM tb_siswa";

$hasil = mysqli_query($koneksi, $squeryData);

if($hasil->num_rows>0){
    while($rowdata = $hasil->fetch_assoc()){
        echo "NIS: ".$rowdata["NIS"]."<br/>";
    }
    }
?>