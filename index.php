<?php




$dir = opendir('files/');

while ($fl = readdir($dir))
{
	 	//echo "<a href='http://$_SERVER[HTTP_HOST]/files/$fl'>".$fl."</a><br>";
	 	echo "<a href='http://$_SERVER[HTTP_HOST]/show_file.php?file=$fl'>$fl</a><br>";
	 	
}

//echo '<pre>';
//print_r($_SERVER);
?>