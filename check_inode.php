<?php
$param="param" ;//ex -a,-h ;
$file_name="check_inode.php";
if($file_name){
     $output = shell_exec('stat '.$file_name);
     echo "<pre>$output</pre>";
}


?>
