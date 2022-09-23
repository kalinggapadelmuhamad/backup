# PHP-random-quotes-generator
A simple library that generates random quotes.

## author 
rakibtg(https://github.com/rakibtg/PHP-random-quotes-generator)

## Requirement 
php >= 5.3

## instalation 

Using Composer 
composer require rakibtg/php-random-quotes-generator

## usage
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

#lisence 
rakibtg recode by kalingga padel muhamad
