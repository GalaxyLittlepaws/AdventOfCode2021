<?php

//count number of lines in input.txt
$lines = count(file('input.txt'));

//convery input.txt to integer array
$input = file('input.txt');
$input = array_map('intval', $input);

//sum three lines of $input, then sum the next three lines, etc. If the next sum is greater than the previous sum, add 1 to counter
$counter = 0;
for ($i = 0; $i < $lines; $i++) {
    if (($i+1) <= $lines-1) {
        if ($input[$i] + $input[$i+1] + $input[$i+2] < $input[$i+1] + $input[$i+2] + $input[$i+3]) {
            $counter++;
        }
    }
}


//output the number of times the sum is greater than the previous sum
echo "There are $counter sums that are greater than the previous sum.\n";

?>