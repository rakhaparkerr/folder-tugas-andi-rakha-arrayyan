<?php
$data_siswa =[
    [
        "nama"=>"Rakha",
        "nis"=>"09125743",
        "usia"=>"17 tahun",
        "hobi"=>"Badminton"
    ],
    [
        "nama"=>"Pandaya",
        "nis"=>"09373696",
        "usia"=>"12 tahun",
        "hobi"=>"Rebahan"
    ],
    [
        "nama"=>"Hugo",
        "nis"=>"092634743",
        "usia"=>"22 tahun",
        "hobi"=>"Bola"
    ]
];

echo "<h3>Data Seluruh Siswa</h3>";
$no= 1;
foreach($data_siswa as $siswa){
    echo "Data Siswa ke-$no<br>";
    foreach($siswa as $key => $value){
        echo "$key : $value <br>";
    }
    echo "<hr>";
    $no++;
}

?>