<?php
$filename = $_GET['file'];
$pathfile = "files/.$filename";
if (file_exists($pathfile)) {
    header("Content-type: application/x-download");
    header("Content-Disposition: attachment; filename=$pathfile");
    readfile($pathfile);
} else {
    header("HTTP/1.1 404 Not Found");
    echo '404 Not Found';
}