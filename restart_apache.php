<?php
$output = shell_exec('service apache2 restart');

// Display the list of all file
// and directory
echo "<pre>$output</pre>"; ?>
