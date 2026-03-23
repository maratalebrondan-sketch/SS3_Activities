<?php
$div3Only = 0;
$div5Only = 0;
$divBoth = 0;

for ($i = 1; $i <= 50; $i++) {

    if ($i % 3 == 0 && $i % 5 == 0) {
        print "$i - Divisible by both<br/>";
        $divBoth++;
    } 

    elseif ($i % 3 == 0) {
        print "$i - Divisible by 3<br/>";
        $div3Only++;
    } 
    elseif ($i % 5 == 0) {
        print "$i - Divisible by 5<br/>";
        $div5Only++;
    }
}

print "<hr>";

print "<strong>TOTALS:</strong><br/>";
print "How many numbers are divisible by 3 only: " . $div3Only . "<br/>";
print "How many numbers are divisible by 5 only: " . $div5Only . "<br/>";
print "How many numbers are divisible by both: " . $divBoth . "<br/>";
?>