<?php
//array: sekumpulan data
//array numerik dan array asosiatif
//perulangan foreach

//1. ARRAY NUMERIK
$ar_buah = array ('pepaya', 'mangga', 'pisang', 'jeruk');

//cetak index ke berapa?
echo $ar_buah[2];
echo '<br>';
$jumlah = count($ar_buah);
echo $jumlah;
echo '<br>';

//lihat hasil sekumpulan data buah dengan foreach
foreach ($ar_buah as $value) {
    echo "$value <br>";
}
echo '<br>';

//lihat hasil sekumpulan data buah dengan foreach
foreach ($ar_buah as $i => $v) {
    echo "$i $v<br>";
}



//2. ARRAY SOSIATIF
$ar_hewan = array (10 => 'kucing', 20 => 'burung', 30 => 'singa', 'ikan');

echo '<br>';

//lihat hasil sekumpulan data hewan dengan foreach
foreach ($ar_hewan as $i => $v) {
    echo "$i $v<br>";
}

?>