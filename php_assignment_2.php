<?php

$tutionFee = 6000;
// $commission;

$tutionFee >= 20000 ? $commission = 25 / 100 * $tutionFee : ($tutionFee >= 10000 && $tutionFee < 20000 ? $commission = 20 / 100 * $tutionFee : ($tutionFee < 10000 && $tutionFee >= 7000 ? $commission = 15 / 100 * $tutionFee : $commission = "invalid data"));  

echo $commission;

?>