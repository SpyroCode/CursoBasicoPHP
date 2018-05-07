<?php

session_start();

echo 'Result: ' . $_SESSION['count'];

unset($_SESSION['count']); //destrullye solo esa session

echo 'Result: ' . $_SESSION['count'];

?>
<a href="destroy.php">salir</a>