<?php

function generateArray(int $n) : array
{
    $arrayResult = array();

    if (is_int($n) && $n > 1) {
        for ($i = 2 ; $i <= $n ; $i++) {
            array_push($arrayResult, $i);
        }

        return $arrayResult;
    }

    else {
        return false;
    }
}
