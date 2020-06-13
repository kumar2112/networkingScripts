<?php
$ftp_user_name="ftpuser";
$ftp_user_pass="ftppass";

$ftp_server = "ftp.example.com";//Your Server Name
$conn_id = ftp_connect($ftp_server) or die("Couldn't connect to $ftp_server");
// path to remote file
$remote_file = 'somefile.txt';//Remote File
$local_file  =  'localfile.txt';//Local File
$fp = fopen($local_file, 'r');

$login_result = ftp_login($conn_id, $ftp_user_name, $ftp_user_pass);

if (ftp_fput($conn_id, $local_file, $fp, FTP_ASCII)) {
    echo "Successfully uploaded $file\n";
} else {
    echo "There was a problem while uploading $file\n";
}
// close the connection and the file handler
ftp_close($conn_id);
fclose($handle);

 ?>
