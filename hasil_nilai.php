<?php
$nama = $_GET['nama'];
$matkul = $_GET['matkul'];
$nilai_uts = $_GET['nilai_uts'];
$nilai_uas = $_GET['nilai_uas'];
$nilai_tugas = $_GET['nilai_tugas'];

//Buat Total Nilai (uts + uas + tugas/3)
$total_nilai = ($nilai_uts + $nilai_uas + $nilai_tugas) / 3;

//Buat Perhitungan IF Untuk Mencari Grade
if ($total_nilai >=85){
    $grade = "A";
}
elseif ($total_nilai >=70){
    $grade = "B";
}
elseif ($total_nilai >=65){
    $grade = "C";
}
elseif ($total_nilai >=30){
    $grade = "D";
}
else {
    $grade = "I";
}

//Buat Perhitungan SWITCHCASE ntuk Mencari Predikat
switch ($grade){
    case "A":
     $predikat = "Sangat Memuaskan";
        break;
     case "B":
        $predikat = "Memuaskan";
        break;
    case "C":
        $predikat = "Cukup";
        break;
    default:
    $predikat = "Tidak Ada";
        break;
}

//Buat Perhitungan IF Untuk Mencari Status LULUS/GAGAL
if($total_nilai >=70){
    $status = "LULUS";
}
else{
    $status = "TIDAK LULUS";
}

//Cetak Hasil
echo 'Nama:' . $nama . '<br>';
echo 'Maatkul:' .  $matkul . '<br>';
echo 'Nilai UTS:' . $nilai_uts . '<br>';
echo 'Nilai UAS:' . $nilai_uas . '<br>';
echo 'Nilai Tugas:' . $nilai_tugas . '<br>';
echo 'Total Nilai' . $total_nilai . '<br>';
echo 'Grade:' . $grade . '<br>';
echo 'Predikat:' . $predikat . '<br>';
echo 'Status:' . $status;
?>