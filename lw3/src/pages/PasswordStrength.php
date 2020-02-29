<?php
  function getGETParameter($text)
  {
    return isset($_GET[$text]) ? (string) $_GET[$text]:null;
  }



   
   $password = getGETParameter('password');
  if ($password === null)
  {
    echo 'Пароль не задан';
  }
  else
  {
    if ($password === '')
    {
      echo 'Введите пароль';
    }
    else
    {
      for ($index = 0; $index < strlen($password); $index++)
      {
        $char = $password{$index};
        $posSim = strpos('123456789qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM', $char);
        if ($posSim === false) break;
      }
      if($posSim === false)
      {
        echo 'Пароль может состоять только из английских символов в верхнем и нижнем регистрах, а также из цифр';
      }
      else
      {//проверка надежности
          $repeatCharacter = 0;
          $arrStroka = str_split($password);
          sort($arrStroka);
          $stroka = implode($arrStroka);
          $ch1 = $stroka{0};
          for ($index = 1; $index < strlen($stroka); $index++) //подсчет повторов
          {
            $ch2 = $stroka{$index};
            if($ch1 === $ch2)
            {
              $repeatCharacter++;
            }
            $ch1 = $ch2;
          }
          $numberOfDigits = 0;
          $numberOfLettersLow = 0;
          $numberOfLettersHigh = 0;
          $char1 = null;
          $repeatCharacter1 = 0;
          for ($index = 0; $index < strlen($password); $index++)
          {
            $char = $password{$index};
            if ($char === $char1)
            {
              $repeatCharacter1++;
            }
            $posSim = strpos('123456789', $char);
            if ($posSim === false)
            {
              $posSim = strpos('qwertyuiopasdfghjklzxcvbnm', $char);
              if ($posSim === false)
              {
                $posSim = strpos('QWERTYUIOPASDFGHJKLZXCVBNM', $char);
                if ($posSim === false)
                {
                }
                else
                {
                  $numberOfLettersHigh++;
                }
              }
              else
              {
                $numberOfLettersLow++; 
              }
            }
            else
            {
              $numberOfDigits++;
            }
            
            $char1 = $char;
          }
          $clock1 = 1;
          $clock = 0;
          $strengthPasswordRepeat = 0;
          while($clock < $repeatCharacter1)
          {
            $strengthPasswordRepeat = $strengthPasswordRepeat + $clock1;
            $clock++;
            $clock1++;

          }
          $numberOfLerrers = $numberOfLerrersLow + $numberOfLerrersHigh;
          $lenPassword = strlen($password);
          $strengthPassword = 0;
          $strengthPassword = $lenPassword * 4;
          $strengthPassword = $strengthPassword + ($numberOfDigits*4);
          if ($numberOfLettersLow != 0)
          {
           $strengthPassword = ($strengthPassword + (($lenPassword - $numberOfLettersLow)*2));
           $lenPassword = strlen($password);
          }
          if ($numberOfLettersHigh != 0)
          {
            $strengthPassword = $strengthPassword + (($lenPassword - $numberOfLettersHigh)*2);
            $lenPassword = strlen($password);
          }
          if ($numberOfLerrers === 0)
          {
            $strengthPassword = $strengthPassword - $lenPassword;  
          }
            if ($numberOfDigits === 0)
          {
          $strengthPassword = $strengthPassword - $lenPassword;  
          }
          $strengthPassword = $strengthPassword - $strengthPasswordRepeat;
           echo $strengthPassword;
        }
    }

}
 