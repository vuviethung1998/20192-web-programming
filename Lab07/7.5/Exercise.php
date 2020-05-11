<?php

$email = $_POST["email"];
$url = $_POST["url"];
$tel = $_POST["tel"];

if (preg_match('/^[A-Za-z0-9_]+@[A-Za-z0-9.]+\.[A-Za-z]{2,}$/', $email)) {
    echo "<p> Valid email: $email </p>";
} else {
    echo "<p> Invalid email: $email </p>";
}
if (preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $url)) {
    echo "<p> Valid URL: $url </p>";
} else {
    echo "<p> Invalid URL: $url </p>";
}
if (preg_match('/^[0|+84]+[0-9]{9}$/', $tel)) {
    echo "<p> Valid tel number: $tel </p>";
} else {
    echo "<p> Invalid tel number: $tel </p>";
}