<?php

function eratosthene(array $xArray, int $startValue = 2)
{
    $endIndex = array_key_last($xArray);
    $endValue = $xArray[$endIndex];
    $startIndex = array_search($startValue, $xArray);

    if ($startValue === $endValue) {
        var_dump($xArray);
    } else {

        for ($i = $startIndex; $i <= $endIndex; $i++) {
            if ($xArray[$i] % $startValue === 0 && $xArray[$i] !== $startValue) {
                unset($xArray[$i]);
            }
        }

        $xArray = array_values($xArray);
        $startIndex++;
        $nextStartValue = $xArray[$startIndex];

        eratosthene($xArray, $nextStartValue);
    }
}
