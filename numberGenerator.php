<?php

require_once('mysql_credentials.php');

$min = 0;
$max = 10;


if($_GET['guess'] === rand($min, $max)){
    print("you have guessed the correct number");
}
else if($_GET['guess'] < rand($min, $max)){
    print("too low");
}
else if($_GET['guess'] > rand($min, $max)){
    print("too high");
}

?>