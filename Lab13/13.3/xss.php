<?php
// This code will alert cookie to the screen
$title = "<script> alert(document.cookie)</script>";
echo "<h2>$title</h2>";

// This code is even harder to see, it can be used in CSRF attacks
$title = "Hello <img height='0' width='0' src='https://bank.com/transfer?to=hacker&amount=10000'";
echo "<h2>$title</h2>";

// To prevent this attacks, simply use encoding
echo "<h2>" . htmlentities($title) . "</h2>";
?>