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
<form action="edit_file.php" method="get">
    <label><?=$nameFile;?></label></br></br>
    <textarea cols='50' rows="20" name="sometext"></textarea></br>

</form>
</body>
</html>
