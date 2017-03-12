<?php
    $nameFile = $_GET['file'];
?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Edit File</title>
</head>
<body>
<form action="save_edit.php" method="get">
    <label><?=$nameFile;?></label></br></br>
    <textarea cols='50' rows="20" name="sometext">
    <?
    			
$getText = file_get_contents('files/' . $_GET['file']);
echo nl2br($getText);
    ?>
    </textarea></br>
					<input type='submit' name='отправить'>
</form>
</body>
</html>