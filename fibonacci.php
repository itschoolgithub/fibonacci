<?php
function calc($l) {
    if ($l <= 0) {
        return [];
    }

    $f = [0];
    if ($l > 1) {
        $f[] = 1;
    }

    for ($i = 2; $i < $l; $i++) {
        $f[] = $f[$i - 1] + $f[$i - 2];
    }

    return $f;
}

$a = calc(10);

// Вывод результата
echo implode(', ', $a);
