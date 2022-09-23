<form method="POST" action="">
  <p>Masukan Nilai Awal   : <input type='number' name='awal'></p>
  <br>
  <p>Masukan Nilai Akhir  : <input type='number' name='akhir'></p>
  <p>Masukan Domain   : <input type='text' name='domain'></p>
  <br>
  <p>Masukan password   : <input type='password' name='password'></p>
  <br>
  <input type="submit" name="gas" value="gas">
</form>

<?php 

if (isset($_POST['gas'])) {

	$awal = $_POST['awal'];
	$akhir = $_POST['akhir'];
	$domain = $_POST['domain'];
	$password = $_POST['password'];
	
	for($i = $awal; $i <= $akhir; $i++){
     echo $i.'@'.$domain.'|'.$password.'<br>';
 }

	echo $awal.$akhir;
} ?>