<?php



echo $_GET['file'];

$getText = file_get_contents('files/'.$_GET['file']);
echo nl2br($getText);
?>