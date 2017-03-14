<?php



$text = $_GET['sometext'];
echo '<pre>';
print_r($_GET['file']);

//file_put_contents('files/'.$_GET['file'], $text.PHP_EOL, FILE_APPEND);
?>