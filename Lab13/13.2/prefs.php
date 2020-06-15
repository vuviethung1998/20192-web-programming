<?php


$colors = array(
    'green' => "#008000",
    'white' => "#ffffff",
    'red' => "#ff0000",
    'blue' => "#0000ff",
);
$fg_name = htmlentities($_POST['foreground']);
$bg_name = htmlentities($_POST['background']);
setcookie('bg', $colors[$bg_name]);
setcookie('fg', $colors[$fg_name]);
?>
<html>

<head>
    <title>Preferences Set</title>
</head>

<body>

    Thank you. Your preferences have been changed to:<br />
    Foreground: <?=$fg_name?><br />
    Background: <?=$bg_name?><br />
    
    Click <a href="prefs_demo.php">here</a> to see the likiness in action.
</body>

</html>