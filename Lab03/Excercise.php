<html>
    <head><title>Receiving Input</title></head>
    <body>
        <font size="5"> Thank you. Got your input </font>
        <?php
        $username = $_POST["username"];
        $class = $_POST["class"];
        $university = $_POST["university"];
        $hobby = $_POST["hobby"];
        print("<br>Hello, $username");
        print("<br>You are studying at $class, $university");
        print("<br>Your hobby is:");
        echo '<ul>';
        if (!empty($_POST['check_list'])) {
            foreach ($_POST['check_list'] as $check) {
                echo "<li>{$check}</li>";
            }
        }
        echo '</ul>';
        ?>
    </body>
</html>
