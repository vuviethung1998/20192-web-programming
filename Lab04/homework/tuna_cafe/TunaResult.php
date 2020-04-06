<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tuna Result</title>
    </head>
    <body>
        <font size='5' color="green">Tuna cafe result receive</font>
        <?php
            if (count($_GET['prefer']) == 0) {
                print 'Pick up something as your favourite dish';
            } else {
                print "<br />Your choice is: <br />";
                print '<ul>';
                foreach ($_GET['prefer'] as $key => $value) {
                    print "<li>$value</li>";
                }
                print '</ul>';
            }
        ?>
    </body>

</html>
