<?php
$mainP = $_SERVER['HTTP_HOST'];

if (!empty($_POST['sometext']) && !empty($_POST['nameFile'])) {
    $handle = fopen('files/' . $_POST['nameFile'].'.txt', 'w');
    fwrite($handle, $_POST['sometext'] . PHP_EOL);
    fclose($handle);
    echo 'Файл сохранен';
}

?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Edit File</title>
</head>
<body>
<h3><a href="http://<?= $mainP ?>">Вернуться на главную</a></h3>
<form action="" method="POST">
    <label>Введите название файла:</label></br>
    <input type="text" name="nameFile"><br><br>
    <label>Введите ваш текст:</label></br>
    <textarea cols='50' rows="20" name="sometext">

    </textarea></br>
    <input type='submit' value="Сохранить">
</form>
</body>
</html>