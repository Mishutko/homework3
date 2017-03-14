<?php


echo $_GET['file'];

$getText = file('files/' . $_GET['file']);
foreach ($getText as $line) {
    echo $line . '<br>';
}
?>