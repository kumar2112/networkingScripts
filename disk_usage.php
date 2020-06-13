<?php
$param="param" ;//ex -a,-h ;
if($param){
    $output = shell_exec('df '.$param);
}else{
     $output = shell_exec('df');
}
echo "<pre>$output</pre>";
?>
