<?php
//Do not delete the file it helps to store the cache in user's browser
// Cache the contents to a cache file
$cached = fopen($cachefile, 'w');
fwrite($cached, ob_get_contents());
fclose($cached);
ob_end_flush(); // Send the output to the browser
?>