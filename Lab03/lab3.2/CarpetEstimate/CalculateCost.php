<html>
    <head><title>Carpet Cost Quote</title></head>
    <body>
        <font size=5 color="blue"> Your Estimated Carpet Costs:</font>
        <br/>
        <?php

        function carpet_cost($width, $length, $grade, $carpet_cost)
        {
            if ($width > 0 && $length > 0) {
                if ($grade == 1) {
                    $carpet_cost = $width * 4.99 * $length;
                    return $carpet_cost;
                } elseif ($grade == 2) {
                    $carpet_cost = $width * 3.99 * $length;
                    return $carpet_cost;
                } else {
                    print "Unknown carpet grade  =   $grade";
                    return 0;
                }
            } else {
                return 0;
            }
        }

        $length = $_POST["length"];
        $carpet_cost = 0;

        $width = $_POST["width"];
        $grade = $_POST["grade"];
        $install_cost = 0;
        $ret = carpet_cost($width, $length, $grade, $carpet_cost);
        if ($ret) {
            $room_size = $width * $length;
            $total_cost = $ret + ($ret * .5);
            
            print "<br>Total  square feet = $room_size";
            print "<br>Carpet  grade = $grade";
            print "<br>Carpet cost = \$$ret";
            print "<br>Total  cost estimate (installed) = \$$total_cost";
        } else {
            print "Illegal value received";
        }
        ?>
    </body>
</html>