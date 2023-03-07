<?php
	sleep(65);
    $file2 = '/var/www/html/cooldown2.txt'; // the name of the text file (must be writeable by the server)
    $orderNumber2 = file_get_contents ($file2); // read file data and store as variable
    $fdata2 = intval($orderNumber2); // increment the value
    $fdata2 = intval($orderNumber2)-1; // increment the value
    file_put_contents($file2, $fdata2); // write the new value back to file
?>