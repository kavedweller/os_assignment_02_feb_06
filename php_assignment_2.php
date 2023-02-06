<?php

$tutionFee = 6000;
$comission;

$tutionFee > 20000 ? $comission = 25 / 100 * $tutionFee : ($tutionFee > 10000 && $tutionFee < 20000 ? $comission = 20 / 100 * $tutionFee : ($tutionFee < 10000 && $tutionFee >= 7000 ? $comission = 15 / 100 * $tutionFee : $comission = "invalid data"));  

echo $comission;

?>