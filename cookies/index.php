<?php

//setcookie(parametro,valor,tiempo) llamas la funcio

setcookie('count', '1', time() + 3600);

echo '<p>Cookies</p>';