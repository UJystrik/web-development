<?php
  $email = $_POST['email'] ?? null;
  if (file_exists('C:/Users/polzovatel/Documents/web-development/lw6/data-message/'.$email.'.txt')) //проверяем, существует ли файл
    {
      $fp = fopen("C:/Users/polzovatel/Documents/web-development/lw6/data-message/".$email.".txt","r");//если существуем, открываем файл
      $email = fgets($fp);
      $name = fgets($fp);
      $country = fgets($fp);
      $gender = fgets($fp);
      while(!feof($fp))
      {
        $message = fgets($fp);
        $messageall = $messageall.$message;
      }
      
      fclose($fp);//закрываем файл.
    }
   else
   {
      echo 'Нет данных о пользователе';
    }
?>
<!DOCTYPE html>
<html lang="ru">
  <head>
  	<meta charset="UTF-8"/>
    <title>Вязов Родион</title>
    <link rel="stylesheet" type="text/css" href="http://localhost:8080/css/style2.css">	
  </head>
  <body>
    <header>
    </header>
    <article>
      <div class="h4box">
        <img src="https://sun9-46.userapi.com/c206620/v206620957/beb5b/nKOSr0kGzPI.jpg" class="linepng">
          <h4>ПРОВЕРКА</h4>
        <img src="https://sun9-46.userapi.com/c206620/v206620957/beb5b/nKOSr0kGzPI.jpg" class="linepng">
        <div class="clear"></div>
      </div>
      <form method="POST" class="aboutme" enctype="application/x-www-form-urlencoded" action="http://localhost:8080/php/check2.php">
        <label for="email" class="titleme">
          Email пользователя
        </label>
        <p class="spec"> 
          &#8727;
        </p>
        <input placeholder="<?php echo $email ?>" required="required" name="email" value="" size=30 class="inpbox">
        <label for="name" class="titleme">
         Имя пользователя 
        </label>
        <p class="spec"> 
          &#8727;
        </p>
        <input placeholder="<?php echo $name ?>" disabled maxlength="255" title="" name="name" value="" size=30 class="inpbox"/>
        <label for="country" class="titleme">
          Страна Пользователя
        </label>
        <input placeholder="<?php echo $country ?>" disabled type="" name="country" class="inpbox">
        <p class="titleme">
          Пол Пользователя
        </p>
        <p class="clear"></p>
        <input placeholder="<?php echo $gender ?>" disabled type="" name="gender" class="inpbox">
        <div class="clear"></div>
        <p class="titleme">
          Сообщение Пользователя
        </p>
        <p class="spec"> 
          &#8727;
        </p>
        <div class="clear"></div>
        <textarea name="message" placeholder="<?php echo $messageall ?>" disabled maxlength="255" rows="7" cols="57" wrap="hard" id="inpbox"></textarea>
        <input type="submit" value="Отправить" class="button"></input>
      </form>
  	</article>
  	<footer>
  	</footer>
  </body>
</html>