<?php

// Patern 1

function patternGenerator($c)
{
    for ($i = 1; $i <= $c; $i++) {
        if ($i == 1) {
            echo 'x';
        }
        echo "`";
    }
}
patternGenerator(3);

// Patern 2

function patternGenerator($c)
{
    for ($j = 0; $j < $c; $j++) {
        if ($j != 0) {
            echo "\n";
        }
        for ($i = 0; $i < $c; $i++) {
            if ($i % $c) {
                # code...
            }
            echo "x";
        }
    }
}
patternGenerator(3);

// Patern 3

function patternGenerator($c)
{
    for ($i = 0; $i < $c; $i++) {
        echo "x";
    }
}
patternGenerator(5);

echo "\n";
