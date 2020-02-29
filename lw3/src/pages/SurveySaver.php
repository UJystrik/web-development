<?php
  function getGETParameter($text)
  {
    return isset($_GET[$text]) ? (string) $_GET[$text]:null;
  }
  $email = getGETParameter('email');
  $first_name = getGETParameter('first_name');
  $last_name = getGETParameter('last_name');
  $age = getGETParameter('age');
  $fp = fopen("C:/Users/polzovatel/Documents/lwFTND/lw3/src/config/data/".$email.".txt", "w");
  fwrite($fp, 'First Name: '.$first_name.PHP_EOL);
  fwrite($fp, 'Last Name: '.$last_name.PHP_EOL);
  fwrite($fp, 'Age: '.$age.PHP_EOL);
  fclose($fp);
