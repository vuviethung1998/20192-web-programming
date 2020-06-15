 
<?php
  $input = "\"Stop pulling my hair!\" Jane's eyes flashed.<p>";
  $double = htmlentities($input);

  $neither = htmlentities($input, ENT_NOQUOTES);
  
  $both = htmlentities($input, ENT_QUOTES);
  
  
  
?>