<?php
  function getGETParameter($text)
  {
    return isset($_GET[$text]) ? (string) $_GET[$text]:null;
  }
  $email = getGETParameter('email');
  if (file_exists("C:/Users/polzovatel/Documents/lwFTND/lw3/src/config/data/".$email.".txt"))
  {
      $file = fopen("C:/Users/polzovatel/Documents/lwFTND/lw3/src/config/data/".$email.".txt", "r");
      echo fgets($file). "<br/>";
      echo fgets($file). "<br/>";
      echo fgets($file)."<br/>";
      fclose($file);
  }
  else
  {
    echo 'Файл не найден';
  }
 