    <!DOCTYPE HTML>
    <html lang="en">
    <head>
      <meta charset="utf-8">
      <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;500;700&family=Open+Sans:wght@700&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="style2.css">
      <title>BUS SERVICE</title>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <!-- jQuery Mask Plugin -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>

      <script src="./BUSHELP/mail/js/mail.js"></script>
      <script>
       $(function() {
        $('.contact-form__input_tel').mask('+7(000)000-00-00');
      });
    </script>

    

    <style>
    .frame {
      border: 1.5px solid #584e4e;
    }
  </style>
  <style>
  .colortext {
    color: #ff00c4;
  }
</style>
<style>
.colortext2 {
  color: #ffffff;
}
</style>
</head>

<body> 
  <header class="header" id="header">
    <div class="container">
      <div class="header_inner"> 
        <div class="header_logo">
          <span class="colortext2">BUS <span class="colortext">SERVICE</span></span>
        </div>

        <nav class="nav">
          <a class="nav_link" href="#" data-scroll="#transport">Транспорт</a>
          <a class="nav_link" href="#" data-scroll="#services">Услуги</a>
          <a class="nav_link" href="#" data-scroll="#advantages">Преимущества компании</a>
          <a class="nav_link" href="#" data-scroll="#footer">Контакты</a>
        </nav>

      </div>
    </div>
  </header>
  <div class="intro" id="intro">
    <div class="container">
      <div class="intro_inner">
        <h1 class="intro_title">Организация пассажирских перевозок</h1> 
        <div class="cont">
          <?php
        <form class="contact-form" action="send.php" method="post" id="contact-form_1" enctype="multipart/form-data">
          <p class="contact-form__title">Оставьте заявку</p>
          <!-- <p class="contact-form__description"></p> -->
          <div class="contact-form__input-wrapper">
            <input name="name" type="text" class="contact-form__input contact-form__input_name" placeholder="Введите ваше имя">
            <!-- <div class="contact-form__error contact-form__error_name"></div> -->
          </div>

          <div class="contact-form__input-wrapper">
            <input name="tel" type="tel" class="contact-form__input contact-form__input_tel" placeholder="Введите ваш телефон">
            <!-- <div class="contact-form__error contact-form__error_tel"></div> -->
          </div>

          <div class="contact-form__input-wrapper"> 
           <input name="email" type="email" class="contact-form__input contact-form__input_email" placeholder="Введите ваш email">
<!--              <div class="contact-form__error contact-form__error_email"></div>
-->           </div>
<button class="contact-form__button" type="submit">Отправить заявку </button>
  if(isset($_POST['submit'])){
          $to = "anton71vanov@yandex.ru"; // Здесь нужно написать e-mail, куда будут приходить письма
          $from = $_POST['email'];
          $telefon = $_POST['tel'];
          $name = $_POST['name'];
          $subject = "Форма отправки сообщений с сайта";
          $message = $name . " оставил сообщение:" . "\n\n" ."Телефон: " . $telefon ."\n\n" . $_POST['message'];
          $headers = "From:" . $from;
          mail($to,$subject,$message,$headers);
        }
        else 
        echo "Error";
?>
</form>
</div>  
</div>
</div>
<script src="three.min.js"></script>
<script src="vanta.birds.min.js"></script>
<script src="app.js"></script>
<script src="app2.js"></script>
</div>


<!--Bus-->
<div class="container" id="transport">
  <h2 class="intro_bus">Виды транспортов</h2>
  <div class="bus">
    <div class="bus_item">
      <div class="bus_icon">
        <img class="frame" width="370px"height="250px"  src="images/bus/bus.png" alt="">
        <h4 class="bus_title">Автобус Паз</h4>
        <div class="bus_text">От 600р/ч</div>
        <a class="btn2  btn2--red" href="#">Заказать</a>
      </div>
    </div>

    <div class="bus_item">
      <img class="frame" width="370px"height="250px" src="images/bus/bus-2.png" alt="">
      <h4 class="bus_title">Автобус Mercedes Sprinter</h4>
      <div class="bus_text">От 600р/ч</div>
      <b class="btn2  btn2--red" href="#">Заказать</b>    

    </div>
    <div class="bus_item">
      <img class="frame" width="370px"height="250px" src="images/bus/bus4.jpg" alt="">
      <h4 class="bus_title">Автобус Богдан</h4>
      <div class="bus_text">От 800р/ч</div>
      <b class="btn2  btn2--red" href="#">Заказать</b>

    </div>
    <div class="bus_item">
      <img class="frame" width="370px"height="250px" src="images/bus/bus3.jpg" alt="">
      <h4 class="bus_title">Автобус HYANDAI UNIVERSE</h4>
      <div class="bus_text">От 600р/ч</div> 
      <a class="btn2  btn2--red" href="#">Заказать</a>  
    </div>

    <div class="bus_item">
      <img class="frame" width="370px"height="250px" src="images/bus/bus5.jpg" alt="">
      <h4 class="bus_title">Автобус Ютонг</h4>
      <div class="bus_text">От 600р/ч</div>
      <a class="btn2  btn2--red" href="#">Заказать</a>  
    </div>

    <div class="bus_item">
      <img class="frame" width="370px"height="250px" src="images/bus/bus6.png" alt="">
      <h4 class="bus_title">Автобус IVEKO</h4>
      <div class="bus_text">От 600р/ч</div>
      <a class="btn2  btn2--red" href="#">Заказать</a>  
    </div>
  </div>
</div>

<!--Services-->
<div class="services" id="services">
 <div class="services_item">
  <img class="services_photo"widht="1100px"height="450px" src="images/services/1.jpg" alt="">
  <div class="services_content">
    <div class="services_title">Транспорт на свадьбу</div>
  </div>
</div>
<div class="services_item">
  <img class="services_photo"widht="1100px"height="450px" src="images/services/2.jpeg" alt="">
  <div class="services_content">
    <div class="services_title">Детские перевозки</div>
  </div>
</div>
<div class="services_item">
  <img class="services_photo" widht="1100px"height="450px" src="images/services/3.jpg" alt="">
  <div class="services_content">
    <div class="services_title">Транспорт на корпоратив</div>
  </div>
</div>
<div class="services_item">
  <img class="services_photo"widht="1100px"height="450px" src="images/services/4.jpeg" alt="">
  <div class="services_content">
    <div class="services_title">Транспорт для спортивных мероприятий</div>
  </div>
</div>
<div class="services_item">
  <img class="services_photo"widht="1100px"height="450px" src="images/services/5.jpg" alt="">
  <div class="services_content">
    <div class="services_title">Транспорт для  туристических экскурсий</div>
  </div>
</div>
<div class="services_item">
  <img class="services_photo"widht="1100px"height="450px" src="images/services/6.jpg" alt="">
  <div class="services_content">
    <div class="services_title">Доставка сотрудников на работу, с работы</div>
  </div>
</div>
</div>

<!--Достоинства-->
<div class="advantages" id="advantages">
  <div class="container">
    <h2 class="intro2_bus">Преимущества компании</h2>
    <div class="advantages_inner">
     <div class="advantages_item">
      <img class="team_logo" widht="170px" height="170px" src="images/advantages/1.png" alt="">
      <div class="team_name">Большой выбор пассажирских транспортов</div>
    </div>
    <div class="advantages_item">
      <img class="team_logo" widht="170px" height="170px" src="images/advantages/2.png" alt="">
      <div class="team_name">Гибкая ценовая политика</div>
    </div>
    <div class="advantages_item">
      <img class="team_logo" widht="170px" height="170px" src="images/advantages/3.png" alt="">
      <div class="team_name">Опытный персонал работников</div>
    </div>
    <div class="advantages_item">
      <img class="team_logo" widht="170px" height="170px" src="images/advantages/4.png" alt="">
      <div class="team_name">Безопасные перевозки</div>
    </div>
  </div>
</div>

</div>

<!--контакты-->
<footer class="footer" id="footer">
  <div class="container"></div>
  <div class="footer_inner">

    <div class="header_logo">
      <span class="colortext2">BUS <span class="colortext">SERVICE</span></span>
    </div>
    <div class="footer_nomer">8(902)873-97-95</div>
  </div>
</footer>
<script src="three.min.js"></script>
<script src="vanta.birds.min.js"></script>
<script src="app2.js"></script>

</body>
</html>              