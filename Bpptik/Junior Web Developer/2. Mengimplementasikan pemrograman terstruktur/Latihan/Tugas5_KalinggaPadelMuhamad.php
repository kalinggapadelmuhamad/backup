<form method="post" action="">
	<label>Bilangan 1</label>
	<input type="text" name="bil1" placeholder="Masukan Bilangan 1">
	<br>
	<label>Bilangan 2</label>
	<input type="text" name="bil2" placeholder="Masukan Bilangan 2">
	<br>
	<input type="submit" name="hitung" value="Hitung">
	<p>===============================================</p>
</form>
<?php 
	function tambah($bil1,$bil2) {
		$res = $bil1 + $bil2;
		echo "Hasil Penjumlahan adalah ".$res. "<br>";
	} 

	function kurang($bil1,$bil2) {
		$res = $bil1 - $bil2;
		echo "Hasil Pengurangan adalah ".$res. "<br>";
	} 

	function kali($bil1,$bil2) {
		$res = $bil1 * $bil2;
		echo "Hasil Perkalian adalah ".$res. "<br>";
	} 

	function Bagi($bil1,$bil2) {
		$res = $bil1 / $bil2;
		echo "Hasil Pembagian adalah  ".$res;
   }
	if (isset($_POST['hitung'])) {
		$bil1 = $_POST['bil1'];
		$bil2 = $_POST['bil2'];
		tambah($bil1,$bil2);
		kurang($bil1,$bil2);
		kali($bil1,$bil2);
		bagi($bil1,$bil2);
}
?>