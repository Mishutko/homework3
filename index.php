<?php


$dir = opendir('files/');


?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <title>Edit File</title>
</head>
<body>
<div>
    <h3><a href='/create_file.php'>Создать файл</a> </h3>

    <?
    while ($fl = readdir($dir)) {
        if (is_dir($fl))
            continue;
        echo "<a href='http://$_SERVER[HTTP_HOST]/show_file.php?file=$fl'>$fl</a>";
        echo "<a href = '/edit_file.php?file=$fl'> Редактировать </a>";
        echo "<a href = '/download_file.php?file=$fl'>Скачать </a>";
        echo "<a href = '/delete_file.php?file=$fl'>Удалить</a><br>";
    }
    ?>
</div>
</body>
</html>
