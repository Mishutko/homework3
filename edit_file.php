<?php
$nameFile = $_GET['file'];
$mainP = $_SERVER['HTTP_HOST'];
$text = $_POST['sometext'];

$handle = fopen('files/' . $nameFile, 'w');
fwrite($handle, $text . PHP_EOL);
fclose($handle);
?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Edit File</title>
</head>
<body>
<h3><a href="http://<?=$mainP?>">Вернуться на главную</a></h3>
<form action="" method="POST">
    <label><?= $nameFile; ?></label></br></br>
    <textarea cols='50' rows="20" name="sometext">
        <?
        $getText = file('files/' . $_GET['file']);
        foreach ($getText as $line) {
            echo $line . '</br>';
        }
        ?>
    </textarea></br>
    <input type='submit' value="Сохранить">
</form>
</body>
</html>