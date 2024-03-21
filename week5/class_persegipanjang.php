<?php
class PersegiPanjang{
    var $panjang;
    var $lebar;
	
    function __construct($panjang,$lebar){
    	$this->panjang = $panjang;
        $this->lebar = $lebar;
        
    }
}

// function getLuas(){
//     $persegipanjang = new PersegiPanjang(4,5);
//     $luas = $persegipanjang->panjang * $persegipanjang->lebar;
//     echo "Luas = ".$luas . PHP_EOL;
// }
// function getKeliling(){
//     $persegipanjang = new PersegiPanjang(4,5);
//     $keliling = 2*($persegipanjang->panjang+$persegipanjang->lebar);
//     echo "Keliling = ". $keliling . PHP_EOL;
// }

// getLuas();
// getKeliling();