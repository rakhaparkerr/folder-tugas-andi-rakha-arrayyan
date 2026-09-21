<?php
require_once 'config/connection.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="style.css">
        <script src="script.js"></script>
    </head>
    <body>
        <header>
            <h1>HEADER</h1>
            <p>SUB-HEADER</p>
        </header>

        <nav>
                <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="pages/">About</a></li>
                <li><a href="pages/">Project</a></li>
                <li><a href="pages/">Contact</a></li>    
            </ul>
        </nav>

        <main>
            <p>berikut tabel data siswa kelas 10 lulusan X PPLG 1</p>
            <?php
            $queryData = "SELECT * FROM tb_siswa";

            $hasil = mysqli_query($koneksi, $queryData);

            if ($hasil->num_rows > 0){
                while($rowdata = $hasil->fetch_assoc()){
                    echo "Nama : " .$rowdata["nama_siswa"]."<br/>";
                }
            }
            ?>
        </main>
    </body>