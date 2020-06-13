<?php
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
        <input placeholder="" required="required" name="email" value="" size=30 class="inpbox">
        <label for="name" class="titleme">
         Имя пользователя 
        </label>
        <p class="spec"> 
          &#8727;
        </p>
        <input placeholder="" maxlength="255" title="" name="name" value="" size=30 class="inpbox"/>
        <label for="country" class="titleme">
          Откуда вы?
        </label>
        <input type="" name="country" class="inpbox"
        <p class="titleme">
          Пол Пользователя
        </p>
        <p class="clear"></p>
        <td class="genbox">
          <input id="man" type="radio" name="gender" value="Мужской" checked class="ball"><label for="man" class="textongenbox">Мужской</label>  
          <input id="girl" type="radio" name="gender" value="Женский" class="ball"><label for="girl" class="textongenbox">Женский</label>   
        </td>
        <div class="clear"></div>
        <p class="titleme">
          Сообщение Пользователя
        </p>
        <p class="spec"> 
          &#8727;
        </p>
        <div class="clear"></div>
        <textarea name="message" placeholder="Можете рассказать о себе или задать мне вопрос" maxlength="255" rows="7" cols="57" wrap="hard" id="inpbox"></textarea>
        <input type="submit" value="Отправить" class="button"></input>
      </form>
  	</article>
  	<footer>
  	</footer>
  </body>
</html>