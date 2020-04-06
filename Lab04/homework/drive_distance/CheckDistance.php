<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Distance and Time Calculator</title>
</head>

<body>
    <?php
    $cities = array(
        'San Francisco' => 1835,
        'Toronto' => 435,
        'Washington, DC' => 595,
        'Boston' => 848,
        'Dallas' => 803,
        'Miami' => 1189,
        'Nashville' => 406,
        'Las Vegas' => 1526
    );
    ?>
    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>Walking time</th>
                <th>Destination</th>
                <th>Distance</th>
                <th>Driving time</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $my_count = 1;
            foreach ($_POST['destination'] as $destination) {
                print '<tr>';
                print "<td>$my_count</td>";
                $my_count++;
                if (isset($cities[$destination])) {
                    $distance = $cities[$destination];
                    $time = round($distance / 60, 2);
                    $walktime = round($distance / 5, 2);
                    print "<td>$walktime</td>";
                    print "<td>$destination</td>";
                    print "<td>$distance</td>";
                    print "<td>$time</td>";
                }
                print('</tr>');
            }
            ?>
        </tbody>
    </table>
</body>

</html>