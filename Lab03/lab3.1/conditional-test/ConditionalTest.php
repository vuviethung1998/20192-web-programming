<html>
    <head><title>Conditional Test</title></head>
    <body>
        <?php
        $first = $_GET["firstName"];
        $middle = $_GET["middleName"];
        $last = $_GET["lastName"];
        print("Hi $first! Your full name is $last $middle $first.<br></br>");
        if ($first == $last) {
            print ("$first and $last are equal");
        }
        if ($first < $last) {
            print("$first is less than $last");
        }
        if ($first > $last) {
            print ("$first is greater than $last");
        }
        print("<br></br>");

        $grade1 = $_GET["grade1"];
        $grade2 = $_GET["grade2"];
        $final = (2 * $grade1 + 3 * $grade2) / 5;
        if ($final > 8.9) {
            print("Your final grade is $final. You got an A. Congratulation!");
        } elseif ($final > 7.9) {
            print ("Your final grade is $final. You got an B.");
        } elseif ($final > 6.9) {
            print ("Your final grade is $final. You got an C.");
        } elseif ($final > 5.9) {
            print ("Your final grade is $final. You got an D.");
        } elseif ($final >= 0) {
            print ("Your final grade is $final. You got an F.");
        } else {
            print ("Illegal grade less than 0. Final grade = $final");
        }
        ?>
    </body>
</html>