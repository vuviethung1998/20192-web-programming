<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tuna Cafe</title>
    </head>
    <body>
        <font size="4" color="blue">Welcome to TunaCafe</font>
        <form action="./TunaResult.php" method="get">
            <?php
            $my_menu = array('Tuna0', 'Tuna1', 'Tuna2', 'Tuna3', 'Tuna4');
            $bestseller = 2;
            print 'Please choose your favorite dish:<br/>';

            for ($i = 0; $i < count($my_menu); $i++) {
                print "<input type=\"checkbox\" value=$my_menu[$i] name =\"prefer[]\"> $my_menu[$i]";
                if ($i == $bestseller)
                    print('<font color="red"> Our best seller</font>');
                print('<br/>');
            }
            ?>
            <input type="submit" value="submit">
            <input type="reset" value="reset">
        </form>
    </body>
</html>
