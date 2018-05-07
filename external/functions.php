<?php

echo '<p>Text from functions.php</p>';

function sum($a, $b) {
    $result = $a + $b;
    echo '<p>Result: ' . $result . '</p>';
    return $result;
}

$resul=sum(1,2);
echo $resul;