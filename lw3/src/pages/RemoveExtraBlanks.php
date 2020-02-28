<?php
  function getGETParameter($text)
  {
    return isset($_GET[$text]) ? (string) $_GET[$text] : null;
  }
  header("Content-Type: text/plain");
  $text = getGETParameter('text');
  $char = '1';
  for ($index = 0; $index < strlen($text); $index++)
  { 
     $char = $text{$index}; 
     if($char === ' ')
     {
      echo ' ';
      while($char === ' ') and ($index < strlen($text))
        {
          $char = $text{$index};
          $index++;

        }
     }
     else
     {
      echo ' ';
      $index++;
     }
  } 