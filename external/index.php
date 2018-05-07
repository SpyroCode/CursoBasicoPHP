<?php

require 'functions.php'; //se detien si hay un error
include_once ('functions.php'); //no se detine si hay un error //include_once no te carga la informacion si ya la cargaste una vez

echo '<p>Text from index.php</p>';

sum(10, 20);

$resul=sum(1,2);
echo $resul;