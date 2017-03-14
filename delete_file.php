<?php
unlink('files/' . $_GET['file']);
header("Location: http://$_SERVER[HTTP_HOST]");