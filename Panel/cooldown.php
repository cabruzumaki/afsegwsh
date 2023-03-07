<?php
	sleep(65);
    $file = '/var/www/html/cooldown.txt'; // the name of the text file (must be writeable by the server)
    $orderNumber = file_get_contents ($file); // read file data and store as variable
    $fdata = intval($orderNumber); // increment the value
    $fdata = intval($orderNumber)-1; // increment the value
    file_put_contents($file, $fdata); // write the new value back to file
?>