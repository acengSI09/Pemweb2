<?php
class NilaiSiswa
{
    public $nama;
    public $nilai;
    public $kuliah = 'STT Terpadu Nurul Fikri';
    public function getHasil()
    {
        if ($this->nilai > 55) return 'LULUS';
        else return 'TIDAK LULUS';
    }
}

$ns1 = new NilaiSiswa();
$ns1->nama ="Aceng";
$ns1->nilai = 70;

echo $ns1->nama;
echo '<br>';
echo $ns1->nilai;
echo '<br>';
echo $ns1->kuliah;
echo '<br>';
echo '<br>';
echo $ns1->getHasil();

?>