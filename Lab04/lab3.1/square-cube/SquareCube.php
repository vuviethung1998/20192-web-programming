<!DOCTYPE html>
<html>
    <head>
        <title>Square and cube</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    
    <body>
        <h1>Generate Square and Cube Values</h1>
        <br>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
            <?php
            if (array_key_exists('start', $_GET)) {
                
                $start = $_GET['start'];
                $end = $_GET['end'];
            } else {
                $start = 0;
                $end = 0;
            }
            ?>
            <table>
                <tr>
                    <td>Select start number:</td>
                    <td>
                        <select name="start">
                            <?php
                            
                            for ($i = 0; $i <= 10; $i++) {
                                if ($start == $i) {
                                    print "<option selected>$i</option>";
                                } else {
                                    print "<option>$i</option>";
                                }
                            }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Select end number:</td>
                    <td>
                        <select name="end">
                            <?php
                            for ($i = 0; $i <= 20; $i++) {
                                if ($end == $i) {
                                    print  "<option selected>$i</option>";
                                } else {
                                    print   "<option>$i</option>";
                                }
                            }
                            ?>
                        </select></td>
                </tr>
                <tr>
                    <td align="right">
                        <input type="submit" value="Submit">
                    </td><td align="left">
                        <input type="reset" value="Reset">
                    </td>
                </tr>
            </table>
            <table>
                <tr>
                    <th>Number</th>
                    <th>Square</th>
                    <th>Cube</th>
                </tr>
                <?php
                if (array_key_exists('start', $_GET)) {
                    $i = $start;
                    while ($i < $end) {
                        
                        $sqr = $i * $i;
                        $cubed = $i * $i * $i;
                        print "<tr><td>$i</td><td>$sqr"
                                . "</td><td>$cubed</td></tr>";
                        $i = $i + 1;
                    }
                    
                }
                ?>
            </table>
        </form>
    </body>
</html>
