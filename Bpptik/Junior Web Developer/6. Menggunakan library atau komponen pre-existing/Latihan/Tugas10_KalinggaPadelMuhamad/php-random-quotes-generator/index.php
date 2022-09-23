<?php
	
  //Memanggil Source dari file yang di tentukan	
  include  'src/RandomQuotes.php';

  // Creates a new object of RandomQuotes class.
  $generateQuote = new \RandomQuotes\RandomQuotes();
  
  // Mengenerate Quotes dan  
  $hasilQuote = $generateQuote->generate();

  echo "<h2>Quotes Dari : {$hasilQuote['quoteAuthor']}</h2>
  		<p>- {$hasilQuote['quoteText']}</p>";

?>