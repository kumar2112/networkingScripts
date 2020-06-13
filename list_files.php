<?php
$folder_name="/var/www/html";
if($folder_name){
     $output = shell_exec('ls '.$folder_name);
}else{
     $output = shell_exec('ls');
}
// Display the list of all file
// and directory
echo "<pre>$output</pre>";
 ?>
