<?php  
 $file = fopen("contohjwdaja.txt","w");   //membuat file txt dan membuat mode w = write
 fwrite($file,"Halo, ini isi jwd");  // menuliskan isi file
 fclose($file);  
 ?>  