<?php
$hostName="hostname";
$username="username";
$port="port";
$password="password";
$ip="ipaddress"

//It can take ip or host any one and ping the server
$output = shell_exec('telnet '.$ip." ".$port);
echo "<pre>$stream</pre>";
