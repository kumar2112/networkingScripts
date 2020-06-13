<?php
//Note execute this SSH2 PECL extention is required
$hostName="hostname";
$username="username";
$port="port";
$password="password";

$connection = ssh2_connect($hostName, $port);
ssh2_auth_password($connection, $username, $password);

$stream = ssh2_exec($connection, 'ls');
echo "<pre>$stream</pre>";
