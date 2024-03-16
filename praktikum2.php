<?php
include_once 'header.php';
include_once 'sidebar.php';
?>

<!-- main.php -->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>HALAMAN UTAMA</h1>
          </div>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">PRAKTIKUM 2</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
              <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
        /* Menyesuaikan tampilan elemen hr */
        hr {
            border: 1px solid black; /* Menentukan ketebalan dan warna garis */
            margin: 40px 0; /* Menambahkan margin di atas dan di bawah hr */
        }
</style>
<form method="GET">
    <h1>Form Belanja Online</h1>
    <hr>
  <div class="form-group row">
    <label for="customer" class="col-4 col-form-label">Customer</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="customer" name="customer" placeholder="Nama Customer" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Pilih Produk</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio" id="radio_0" type="radio" class="custom-control-input" value="TV"> 
        <label for="radio_0" class="custom-control-label">TV</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio" id="radio_1" type="radio" class="custom-control-input" value="Kulkas"> 
        <label for="radio_1" class="custom-control-label">Kulkas</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio" id="radio_2" type="radio" class="custom-control-input" value="Mesincuci"> 
        <label for="radio_2" class="custom-control-label">Mesin Cuci</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
    <div class="col-8">
      <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
  <hr>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Ambil data dari formulir
    $customer = $_GET["customer"];
    $radio = $_GET["radio"];
    $jumlah = $_GET["jumlah"];

    // Validasi data (misalnya, pastikan jumlah positif)
    if ($jumlah <= 0) {
        echo "Jumlah harus lebih besar dari 0. Silakan kembali dan masukkan jumlah yang valid.";
    } else {
        // Proses pesanan (di sini bisa ditambahkan logika bisnis sesuai kebutuhan)
        $total_harga = hitungTotalHarga($radio, $jumlah);

        // Tampilkan konfirmasi pesanan
        echo "Terima kasih atas pesanan Anda😍😍!<br> <br>";
        echo "Customer: $customer<br>";
        echo "Produk: $radio<br>";
        echo "Jumlah: $jumlah<br>";
        echo "Total Harga: $total_harga";
    }
} else {
    // Jika formulir tidak dikirimkan melalui metode POST
    echo "Akses tidak valid.";
}

// Fungsi untuk menghitung total harga (contoh sederhana)
function hitungTotalHarga($radio, $jumlah) {
    // Harga produk (contoh, bisa disesuaikan)
    $harga_produk = [
        "TV" => 4200000,
        "Kulkas" => 3100000,
        "Mesincuci" => 3800000
    ];

    // Hitung total harga
    $total_harga = $harga_produk[$radio] * $jumlah;

    return $total_harga;
}
?>

              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                Footer
              </div>
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php
include_once 'footer.php';
?>