<?php 

class Rumus{

	//function luasSegitiga
	function luasSegitiga($alas, $tinggi){
		$luas = 0.5 * $alas * $tinggi;
		return $luas;
	}

	//function luasPersegiPanjang
	function luasPersegiPanjang($panjang, $lebar){
		$luas = $panjang * $lebar;
		return $luas;
	}

	//function luasLingkaran
	function luasLingkaran($rusuk){
		$luas = 22/7 * $rusuk * $rusuk;
		return $luas;
	}
}

$luasLingkaran = new Rumus();
echo $luasLingkaran->luasPersegiPanjang(14, 14);




?>