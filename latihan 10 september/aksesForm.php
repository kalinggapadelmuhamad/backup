<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>Aplikasi penyimpanan data pada file TXT</h2>  
	<hr>  
	<form action="" method="post">  
		<table width="100%" border="0">  
			<tr>  
				<td width="150">Nama File</td>  
				<td><input type="text" name="nama" required></td>  
			</tr>  
			<tr>  
				<td width="150" valign="top">Isi Tulisan</td>  
				<td><textarea name="isi" cols="50" rows="10" required></textarea></td>  
			</tr>  
			<tr>  
				<td width="150"></td>  
				<td><input type="submit" name="submit" value="simpan"></td>  
			</tr>  
		</table>  
	</form> 

	<?php 
		if (isset($_POST['submit']))
		    {
				 $nama     = trim($_POST['nama']);  
				 $namafile = "$nama.txt";  
				 $isi      = trim($_POST['isi']);  
				 $file = fopen($namafile,"w");  
				 fwrite($file, $isi);  
				 fclose($file);  
				 echo "<h2>Hasil Penyimpanan Data</h2>";  
				 echo "<hr>";  
				 echo "Hasil : <a href='$namafile'> $namafile </a>";  
			}
?>  



</body>
</html>