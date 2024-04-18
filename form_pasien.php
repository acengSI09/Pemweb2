<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Form Pasien</title>
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center">Form Pasien</h2>
        <form action="proses_pasien.php" method="POST">
            <div class="form-group row">
            <label for="kode" class="col-4 col-form-label">Kode</label>
            <div class="col-8">
                <input id="kode" name="kode" type="number" class="form-control" required placeholder="Masukkan Kode">
            </div>
            </div>
            <div class="form-group row">
            <label for="nama" class="col-4 col-form-label">Nama</label>
            <div class="col-8">
                <input id="nama" name="nama" type="text" class="form-control" required placeholder="Masukkan Nama">
            </div>
            </div>
            <div class="form-group row">
            <label for="tmp_lahir" class="col-4 col-form-label">Tempat Lahir</label>
            <div class="col-8">
                <input id="tmp_lahir" name="tmp_lahir" type="text" class="form-control" required placeholder="Masukkan Tempat Lahir">
            </div>
            </div>
            <div class="form-group row">
            <label for="tgl_lahir" class="col-4 col-form-label">Tanggal Lahir</label>
            <div class="col-8">
                <input id="tgl_lahir" name="tgl_lahir" type="date" class="form-control" required placeholder="Masukkan Tanggal Lahir">
            </div>
            </div>
            <div class="form-group row">
            <label for="gender" class="col-4 col-form-label">Jenis Kelamin</label>
            <div class="col-8">
                <select id="gender" name="gender" class="custom-select" required>
                <option value="">Pilih Jenis Kelamin</option>
                <option value="L">Laki-Laki</option>
                <option value="P">Perempuan</option>
                </select>
            </div>
            </div>
            <div class="form-group row">
            <label for="email" class="col-4 col-form-label">Email</label>
            <div class="col-8">
                <input id="email" name="email" type="email" class="form-control" required placeholder="Masukkan Email">
            </div>
            </div>
            <div class="form-group row">
            <label for="alamat" class="col-4 col-form-label">Alamat</label>
            <div class="col-8">
                <input id="alamat" name="alamat" type="text" class="form-control" required placeholder="Masukkan Alamat">
            </div>
            </div>
            <div class="form-group row">
            <label for="kelurahan_id" class="col-4 col-form-label">Kelurahan ID</label>
            <div class="col-8">
                <select id="kelurahan_id" name="kelurahan_id" class="custom-select" required>
                <option value="">Pilih Kelurahan</option>
                <?php
                // Assuming you have a database connection established
                require 'dbkoneksi.php';
                
                // Query untuk mendapatkan semua data kelurahan
                $sql = "SELECT * FROM kelurahan";
                $result = $dbh->query($sql);
                
                // Membuat dropdown select
                while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                    echo "<option value='" . $row['id'] . "'>" . $row['nama'] . "</option>";
                }
                ?>
                </select>
            </div>
            </div>
            <div class="form-group row">
            <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
            </div>
        </form>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>

</html>