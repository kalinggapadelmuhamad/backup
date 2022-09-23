<?php 

	class inputProgram{

		//function luasSegitiga
		function luasSegitiga($alas, $tinggi){
			$luas = 0.5 * $alas * $tinggi;
			return $luas;
		}

		//function luasPersegi
		function luasPersegi($sisi){
			$luas = $sisi * $sisi;
			return $luas;
		}

	}

	
	$luasLingkaran = new inputProgram();
	echo $luasLingkaran->luasSegitiga(14, 14);
    echo "<br>";
	$luasLingkaran = new inputProgram();
	echo $luasLingkaran->luasPersegi(7);
	

 ?>