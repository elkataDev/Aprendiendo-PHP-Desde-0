<?php
//5. Usa un bucle while para simular un cajero que reste montos hasta quedarse sin saldo.
$saldo = 1000;
$retiros = [200, 300, 600];

$i = 0;
while ($i < count($retiros) && $saldo >= $retiros[$i]) {
    $saldo -= $retiros[$i];
    echo "Retirado: " . $retiros[$i] . ", Saldo: " . $saldo . "\n";
    $i++;
}