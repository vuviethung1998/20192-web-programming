<html>
    <head></head>
    <body>
        <table>
            <tbody><tr><td>Totle</td><td>Author</td><td>Description</td></tr></tbody>
            <?php
                foreach ($bookss as $title => $book) {
                    echo '<tr><td><a href="index.php?book='.$book->titles.'">'.$book->titles.'</a></td><td>'.$book->authors.'</td><td>'.$book->descriptiosn.'</td></tr>';
                }
            ?>
        </table>
    </body>
</html>