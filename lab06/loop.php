
<?php
// Set month and number of days
$month = "August";   
$days  = 31; 

// Show month
echo "My Birthday is {$month}<br>";

if ($days == 30) {
    for ($i = 30; $i >= 0; $i -= 10) {
        echo "Countdown: {$i}<br>";
    }
    echo "Happy Birthday to You !!!<br>";
    echo "Wish you all the happiness in the world!<br>";

} elseif ($days == 31) {
    for ($i = 31; $i >= 1; $i -= 5) {
        echo "Countdown: {$i}<br>";
    }
    echo "Happy Birthday to You !!!<br>";
    echo "May all your dreams come true!<br>";

} elseif ($days == 28 || $days == 29) {
    echo "Happy Birthday to You !!!<br>";
    echo "May your life be colorful!<br>";

} else {
    echo "Invalid!<br>";
}
?>
