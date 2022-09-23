<?php 

	function ganjilGenap($angka){
		if ($angka % 2 == 0) {
			echo "genap";
		}else if ($angka % 2 == 1){
			echo "ganjil";
		}else {
			return ganjilGenap($angka + 1);
		}
	}

    ganjilGenap(100);

 ?>