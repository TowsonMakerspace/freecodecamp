<?php 
// Step 1 - Identify Current Links

$curl = curl_init();

curl_setopt ($curl, CURLOPT_URL, 'https://www.boxingscene.com/');

curl_setopt ($curl, CURLOPT_TIMEOUT, '120');

curl_setopt ($curl, CURLOPT_RETURNTRANSFER, '1');

$buffer = curl_exec ($curl);

curl_close ($curl);

$raw = htmlspecialchars($buffer);

$parts = explode('CompuBox',$raw);

foreach ($parts as $html){

$pos = strpos($html, '.html');
	
	if ($pos !== false) {
  
		echo "<hr><hr><hr><hr><hr><hr><hr><hr><div>$html</div>";  
  
	} 
   
}


// Step 2 - Record Links for Processing


// Step 3 - Download Content


// Step 4 - Parse Content


// Step 5 - Decide if data is good (trashcan)


// Step 6 - Data Storage

?>
