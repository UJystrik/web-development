<?php
  function getGETParameter($text)
  {
    return isset($_GET[$text]) ? (string) $_GET[$text]:null;
  }
   $identifier = getGETParameter('identifier');
  if ($identifier === null)
  {
    echo 'Идентификатор не найден';
  }
  else
  {
    if ($identifier === '')
    {
      echo 'Пустой идентификатор';
    }
    else
    {
      $identifier = getGETParameter('identifier');
      $char = $identifier{0};
      $pos = strpos('qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM', $char);
      if($pos === false) $pos = strpos('йцукенгшщзхъфывапролджэячсмитьбюЙЦУКЕНГШЩЗХХЪФЫВАПРОЛДЖЭЯЧСМИТЬБЮ', $char);
      if($pos === false)
      { 
        echo "Нет, первый символ идентификатора дожен быть буквой";
      }
      else
      {
        for ($index = 1; $index < strlen($identifier); $index++)
        { 
          $char = $identifier{$index};
          $posSim = strpos('123456789qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM', $char);
          if($posSim === false) $posSim = strpos('йцукенгшщзхъфывапролджэячсмитьбюЙЦУКЕНГШЩЗХХЪФЫВАПРОЛДЖЭЯЧСМИТЬБЮ', $char);
          if ($posSim === false) break;
        }
        if($posSim === false)
        {
          echo 'Нет, дентификатор может состоять только из цифр или букв';
        }
        else
        {
          echo 'Да';
        }
      }
  }
      
}