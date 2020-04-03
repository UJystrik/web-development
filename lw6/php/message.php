<?php 
        $email = $_POST['email'] ?? null;
        $name = $_POST['name'] ?? null;
        $country = $_POST['country'] ?? null;
        $gender = $_POST['gender'] ?? null;
        $message = $_POST['message'] ?? null;
        if (empty($email))
        {
        } else
        {
        $file = fopen("C:/Users/polzovatel/Documents/web-development/lw6/data-message/".$email.".txt", "w");
        $user = 'asdf';
        fwrite($file, $email.PHP_EOL);
        fwrite($file, $name.PHP_EOL);
        fwrite($file, $country.PHP_EOL);
        fwrite($file, $gender.PHP_EOL);
        fwrite($file, $message.PHP_EOL);
        fclose($file); 
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
      <div class="header">
        <ul class="shapka">
          <li><a href="#me">Обо мне</a></li>
          <li><a href="#hobby">Мое хобби</a></li>
          <li><a href="#film">Любимые фильмы</a></li>
        </ul>
      </div> 
    </header>
  	<article class="position">   
      <div class="box">
        <img src="https://sun9-55.userapi.com/c856032/v856032493/20c5d2/80v_rUfeowA.jpg" class="img1" > 
        <div class="boxquote">
          <p class="quote">
            Талант — это то, что ты сделал, а не то, что ты хотел.
          </p>
          <p class="autor">
            — Л. Гурченко
          </p>
          <h1><a href="" name="me"></a> Вязов Родион</h1>
          <img src="https://sun9-27.userapi.com/c856032/v856032493/20c5d9/ATSXPw4kYOk.jpg" class="img3">
        </div>
        <div class="clear"></div>
      </div>
      <div class="box1">
        <div class="leftbox">
          <p class="listheading-u">
            Любимые песни:
          </p> 
          <ul>
            <li> Нет хита (Карандаш feat. Lenin)</li>
            <li>Клише (Вокруг фонарного столба)</li>
            <li>Гореть (Lumen)</li>
            <li>Где я! (Макс Корж)</li>
          </ul>
          <p class="listheading-o">
            Любимые фильмы:
          </p>
          <ol>
            <li>Хатико</li>
            <li>1+1</li>  
            <li>Побег из Шоушенка</li>
            <li>Гарри Поттер</li>
          </ol> 
        </div>
        <div class="rightbox">
          <p>
            Я поступил в Волгатех на <abbr>ФИиВТ</abbr> в 2019 году. До этого я учился в поселке Куженер в "Куженерской средней общеобразовательной школе №2", где окончил 11 классов. До последнего момента я не знал, куда буду поступать. Сперва я думал, что поступлю на обучение радиотехнике,но по советам друзей и родителей я поступил на <abbr>ФиИВТ</abbr>, о чём пока что не пожалел.
          </p>
          <h2><a href="" name="hobby"></a> Мое хобби</h2>
          <p id="a">
            Большую часть свободного времени я отдаю хобби. Мне нравится играть в компьютерные игры. Я увлекаюсь и не замечаю, как летит время. Особенно интересно играть общаясь: с друзьями или союзниками в игре. Кто только не попадается, но в интернете люди ведут себя естественно - это мне и нравится.
          </p> 
          <div class="link"><a href="https://vk.com/ujystrik" title="страница Вконтакте" class="link">Напиши мне</a> &rarr; 
          </div>
          <div  class="clear"></div>
        </div>
      </div>    
      <div class="box2">
        <h2><a href="" name="film"></a> Любимые фильмы</h2> 
        <div class="box3">
          <img src="https://www.wescreenplay.com/wp-content/uploads/2017/12/morgan-freeman-the-shawshank-redemption-movies-1844523-1920x1080.jpg" class="img_on_box3">
          <h3>Побег из Шоушенка</h3> 
          <p class="p_on_box3">
            Уcпeшный банкир Энди Дюфрейн обвинен в убийcтве cобствeнной жeны и еe любовника. Oказавшись в тюрьме под названием Шоушенк, он cталкиваетcя с жecтoкоcтью и беззакoниeм, цаpящими пo обe cтороны pешетки. Каждый, кто попадает в эти стены, станoвится иx pабом до конца жизни. Hо Энди, вoopуженный живым умом и дoбpой душoй, отказываетcя миритьcя c приговoром cудьбы и начинает pазрабатывать нeвеpоятнo дeрзкий план cвоeго oсвобождения.
          </p> 
        </div>
        <div class="box3">
          <img src="https://web-3.ru/data/articles/40337/2.jpg" class="img_on_box3">
          <h3>Гарри Поттер</h3>
          <p class="p_on_box3">
            Жизнь десятилетнего Гарри Поттера нельзя назвать сладкой: родители умерли, едва ему исполнился год, а от дяди и тёти, взявших сироту на воспитание, достаются лишь тычки да подзатыльники. Но в одиннадцатый день рождения Гарри всё меняется. Странный гость, неожиданно появившийся на пороге, приносит письмо, из которого мальчик узнаёт, что на самом деле он — волшебник и зачислен в школу магии под названием Хогвартс. А уже через пару недель Гарри будет мчаться в поезде Хогвартс-экспресс навстречу новой жизни, где его ждут невероятные приключения, верные друзья и самое главное — ключ к разгадке тайны смерти его родителей.
          </p>
        </div>
        <div class="box3">
          <img src="https://cosmo.kz/wp-content/uploads/2017/07/3905.jpg" class="img_on_box3"> 
          <h3>1+1</h3>
          <p class="p_on_box3">
            Пострадав в результате несчастного случая, богатый аристократ Филипп нанимает в помощники человека, который менее всего подходит для этой работы, — молодого жителя предместья Дрисса, только что освободившегося из тюрьмы. Несмотря на то, что Филипп прикован к инвалидному креслу, Дриссу удается привнести в размеренную жизнь аристократа дух приключений.
          </p>
        </div>
        <div id="box">
          <img src="https://cs9.pikabu.ru/post_img/2018/01/20/11/og_og_1516474791284480848.jpg" class="img_on_box3">
          <h3>Хатико</h3>
          <p class="p_on_box3">
            В основе сюжета — реальная история, случившаяся в Японии и потрясшая весь мир. Однажды, возвращаясь с работы, профессор колледжа нашел на вокзале симпатичного щенка породы акита-ину. Профессор и Хатико стали верными друзьями. Каждый день пес провожал и встречал Профессора на вокзале. И даже потеря хозяина не остановила пса в его надежде, что друг вернется.  
          </p>
        </div>
        <div class="clear"></div> 
      </div>
      
      <a href="https://yandex.ru/search/?text=%D1%84%D0%B8%D0%BB%D1%8C%D0%BC%D1%8B&clid=2270455&banerid=6301000000%3A5d67e4b7eba8e200240b8666&win=400&lr=20721" class="text-decoration-none">
        <div id="last_film">
          Все фильмы
        </div>
      </a>
      <div class="h4box">
        <img src="https://sun9-46.userapi.com/c206620/v206620957/beb5b/nKOSr0kGzPI.jpg" class="linepng">
          <h4>НАПИШИ МНЕ</h4>
        <img src="https://sun9-46.userapi.com/c206620/v206620957/beb5b/nKOSr0kGzPI.jpg" class="linepng">
        <div class="clear"></div>
      </div>
      <form method="POST" class="aboutme" enctype="application/x-www-form-urlencoded" action="http://localhost:8080/php/message.php">
        <label for="name" class="titleme">
          Ваше имя 
        </label>
        <p class="spec"> 
          &#8727;
        </p>
        <input placeholder="Обязательно заполни" maxlength="255" required="required" title="" name="name" value="" size=30 class="inpbox"/>
        <label for="email" class="titleme">
          Ваш email
        </label>
        <p class="spec"> 
          &#8727;
        </p>
        <input placeholder="Обязательно заполни" required="required" name="email" value="" size=30 class="inpbox">
        <label for="country" class="titleme">
          Откуда вы?
        </label>
        <select size="1" name="country" id="countbox" title="В какой стране вы живете?">
          <option value="Россия">Россия</OPTION>    
          <option value="Украина">Украина</option>
          <option value="Беларусь">Беларусь</option>
          <option value="Казахстан">Казахстан</option>
          <option value="Азербайджан">Азербайджан</option>
          <option value="Армения">Армения</option>
          <option value="Грузия">Грузия</option>
          <option value="Израиль">Израиль</option>   
          <option value="США">США</option>
          <option value="Германия">Германия</option>
          <option value="Кыргызстан">Кыргызстан</option>
          <option value="Латвия">Латвия</option>
          <option value="Литва">Литва</option>
          <option value="Эстония">Эстония</option>
          <option value="Молдова">Молдова</option>
          <option value="Таджикистан">Таджикистан</option>
          <option value="Туркменистан">Туркменистан</option>
          <option value="Узбекистан">Узбекистан</option>
        </select>
        <p class="titleme">
          Ваш пол
        </p>
        <p class="clear"></p>
        <td class="genbox">
          <input id="man" type="radio" name="gender" value="Мужской" checked class="ball"><label for="man" class="textongenbox">Мужской</label>  
          <input id="girl" type="radio" name="gender" value="Женский" class="ball"><label for="girl" class="textongenbox">Женский</label>   
        </td>
        <div class="clear"></div>
        <p class="titleme">
          Ваше сообщение
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