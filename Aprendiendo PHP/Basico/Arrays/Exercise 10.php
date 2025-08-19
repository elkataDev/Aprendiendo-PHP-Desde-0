<?php
//10. Filtra los números mayores que 10 con array_filter().

$nums = [5, 12, 8, 20, 3];
$filtrados = array_filter($nums, fn($n) => $n > 10);
print_r($filtrados);