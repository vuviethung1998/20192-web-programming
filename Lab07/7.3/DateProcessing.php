 <html>

 <head>
     <title>Decisions</title>
 </head>

 <body>
     <?php

$date = $_POST['date'];

$two = '[[:digit:]]{2}';

$month = '[0-1][[:digit:]]';

$day = '[0-3][[:digit:]]';

$year = "2[[:digit:]]$two";

$pattern = "/^($year)-($month)-($day)$/";

if (preg_match($pattern, $date)) {
    print "Got valid date = $date $pattern<br>";
} else {

    print "Invalid date = $date $pattern";
}
?>

 </body>

 </html>