<?php


$dir = opendir('files/');

while ($fl = readdir($dir)) {
    if (is_dir($fl))
        continue;
    echo "<a href='http://$_SERVER[HTTP_HOST]/show_file.php?file=$fl'>$fl</a>";
    echo "<a href = '/edit_file.php?file=$fl'> Редактировать </a>";
    echo "<a href = '/download_file.php?file=$fl'>Скачать </a>";
    echo "<a href = '/delete_file.php?file=$fl'>Удалить</a><br>";
}
?>