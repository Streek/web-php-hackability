<?php
//http://s3.amazonaws.com/production_gomobile/gomobile/files/176/sonic_heartsdesire_60.mp3
$file_name = $_GET['file'];
$file_url = $file_name;
$file_name = end(explode('/',$file_name));
header('Content-Type: application/octet-stream');
header("Content-Transfer-Encoding: Binary"); 
header("Content-disposition: attachment; filename=\"".$file_name."\""); 
readfile($file_url);
exit;
?>