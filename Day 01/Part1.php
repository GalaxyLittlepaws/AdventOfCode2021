<?php

//check each line to see if the number is lower than the one after it, if so add 1 to counter
$counter = 0;
for ($i = 0; $i < $lines; $i++) {
    $line = trim(file('input.txt')[$i]);
    $nextLine = trim(file('input.txt')[$i + 1]);
    if ($line < $nextLine) {
        $counter++;
    }
}

//output result
echo "There are $counter lines in the file that are higher than the previous line";

?>