<?php
require 'dbkoneksi.php';

$query = $dbh->query('SELECT p.id, p.kode, p.nama, p.tmp_lahir, p.tgl_lahir, p.gender, p.email, p.alamat, k.nama as nama_kelurahan, pm.nama as nama_paramedik, uj.nama as nama_unit_kerja
                     FROM pasien p
                     JOIN kelurahan k ON p.kelurahan_id = k.id
                     JOIN paramedik pm ON p.paramedik_id = pm.id
                     JOIN unit_kerja uj ON pm.unit_kerja_id = uj.id');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pemeriksaan</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center">Data Pemeriksaan</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>Email</th>
                    <th>Alamat</th>
                    <th>Kelurahan</th>
                    <th>Paramedik</th>
                    <th>Unit Kerja</th>
                </tr>
            </thead>
            <tbody>
            <?php    
            foreach ($query as $row) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['kode'] . "</td>";
                echo "<td>" . $row['nama'] . "</td>";
                echo "<td>" . $row['tmp_lahir'] . "</td>";
                echo "<td>" . $row['tgl_lahir'] . "</td>";
                echo "<td>" . $row['gender'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['alamat'] . "</td>";
                echo "<td>" . $row['nama_kelurahan'] . "</td>";
                echo "<td>" . $row['nama_paramedik'] . "</td>";
                echo "<td>" . $row['nama_unit_kerja'] . "</td>";
                echo "</tr>";
            }  
            ?>                          
            </tbody>
        </table>

    </div>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>

</html>
