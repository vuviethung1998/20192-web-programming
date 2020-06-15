<html>

<head>
    <title>Front Door</title>
</head>
<?php
$fg = $_COOKIE['fg'];
$bg = $_COOKIE['bg'];

?>

<body  style="bgcolor=<?=$bg?>" text="<?=$fg?>">
    <h1>Welcome to the Store</h1>
    <p>We have many good products for you to view. Please feel
        free to browse
        the aisles and stop an assistant at any time. But remember,
        you break it
        you bought it!</p>
    <p>Would you like to <a href="pref_selection.html">change your
            preferences?</a></p>
</body>

</html>
