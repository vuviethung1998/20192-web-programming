<!DOCTYPE html>
<html>
    <head>
        <title>Square and Cube</title>
    </head>
    <body>
        <h1>Datetime processing</h1>

        <br>
        <?php
        $keys = array('name', 'day', 'month', 'year', 'hour', 'min', 'sec');
        $completed = true;
        foreach ($keys as $key) {
            if (array_key_exists($key, $_GET)) {
                if ($key == 'name') {
                    $$key = $_GET[$key];
                } else {
                    $$key = (int) $_GET[$key];
                }
            } else {
                $completed = false;
                if ($key == 'name') {
                    $$key = '';
                } else {
                    $$key = 0;
                }
            }
        }

        function get_select_print($i, $selected) {
            if ($i == $selected) {
                echo "<option value=\"$i\" selected>$i</option>";
            } else {
                echo "<option value=\"$i\">$i</option>";
            }
        }

        function get_max_day($month, $year) {
            if ($month == 0 || $year == 0) {
                return 0;
            }
            $leap = 0;
            if ($year % 4 == 0) {
                if ($year % 100 == 0) {
                    
                    if ($year % 400 == 0) {
                        $leap = 1;
                        
                    } else {
                        $leap = 0;
                    }
                } else 
                {
                    $leap = 1;
                }
            }
            switch ($month) {
                case 1:
                case 3:
                case 5:
                case 7:
                case 8:
                case 10:
                case 12:
                    return 31;
                case 4:
                case 6:
                case 9:
                case 11:
                    return 30;
                case 2:
                    return 28 + $leap;
                default:
                    return 0;
            }
        }
        ?>
    </body>

</html>