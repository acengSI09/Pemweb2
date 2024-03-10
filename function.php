<?php
//Function define by user

//Fungsi yang tidak mengembalikan nilai
function aceng(){
    echo "Nama saya aceng";
}

aceng(); //cetaknya

echo"<br>";

function panggil($arg1){
    echo "Halo apa kabar kamuch $arg1";
}

panggil("aceng");

echo "<br>";

//Fungsi yang mengembalikan nilai
function hasil($a,$b){
    $c=$a*$b;
    return $c;
}
echo hasil(5,7);

echo "<br>";

//Buat fungsi umur

function umur($thn_lahir){
    $thn_sekarang = 2024;
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}

echo umur(2004);

?>