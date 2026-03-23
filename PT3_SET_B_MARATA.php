<?php
    $discs = 65; 

    print "<h3>CD Discount Calculator</h3>";
    print "Number of discs purchased: <b>$discs</b><br>";

    
    if ($discs >= 120) {
        $discount = "10%";
        $message = "You qualify for our highest bulk discount!";
    } elseif ($discs >= 50) {
        $discount = "5%";
        $message = "You qualify for a mid-tier discount.";
    } elseif ($discs >= 15) {
        $discount = "1%";
        $message = "You qualify for a small bulk discount.";
    } else {
        $discount = "0%";
        $message = "No discount applied for 14 or fewer discs.";
    }

    print "Your discount is: <b>$discount</b>";
    print "<p><i>$message</i></p>";
    
    print "<hr>";
?>