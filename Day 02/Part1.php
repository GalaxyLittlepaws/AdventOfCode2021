<?php

// Read the input file
$input = file_get_contents('input.txt');

// pull all lines from $input into an array that have "forward" in them
$linesF = preg_grep('/forward/', explode("\n", $input));
// Strip the "forward" from the lines and convert to integers
$linesF = array_map(function($line) {
    return (int) str_replace('forward ', '', $line);
}, $linesF);
// Sum the linesF array
$sumF = array_sum($linesF);

// pull all lines from $input into an array that have "up" in them
$linesU = preg_grep('/up/', explode("\n", $input));
// Strip the "up" from the lines and convert to integers
$linesU = array_map(function($line) {
    return (int) str_replace('up ', '', $line);
}, $linesU);
// Sum the linesU array
$sumU = array_sum($linesU);

// pull all lines from $input into an array that have "down" in them
$linesD = preg_grep('/down/', explode("\n", $input));
// Strip the "down" from the lines and convert to integers
$linesD = array_map(function($line) {
    return (int) str_replace('down ', '', $line);
}, $linesD);
// Sum the linesD array
$sumD = array_sum($linesD);

// subtract the sum of the linesU array from the sum of the linesD array
$sum1 = $sumD - $sumU;

// multiply sumF and sum1
$sum2 = $sumF * $sum1;


// Print the result
echo "Total distance is now: $sum2\n";