<?php
    //Подключение шапки
    require_once("header.php");
?>


<div class="wrapper">

<div class="container">

  <div class="row">

  <div class="col-lg-9 col-lg-push-3">

    <form role="search" class="visible-xs">
      <div class="form-group">
        <div class="input-group">
           <input type="search" class="form-control input-lg" placeholder="Ваш запрос">
           <div class="input-group-btn">
              <button class="btn btn-default btn-lg" type="submit"><i class="glyphicon glyphicon-search"></i></button>
           </div>
        </div>
      </div>
    </form>
   
    <h1>Фильмы</h1>
    <hr>

    <div class="row">
      <div class="well clearfix">
        <div class="col-lg-3 col-md-2 text-center">
          <img class="img-thumbnail" src="assets/img/dune.png" alt="дюна">
          <p>Дюна</p>
        </div>

        <div class="col-lg-9 col-md-10">
          <p>Наследник знаменитого дома Атрейдесов Пол отправляется вместе с семьей на одну 
            из самых опасных планет во Вселенной — Арракис. Здесь нет ничего, кроме песка, 
            палящего солнца, гигантских чудовищ и основной причины межгалактических конфликтов 
            — невероятно ценного ресурса, который называется меланж. В результате захвата 
            власти Пол вынужден бежать и скрываться, и это становится началом его эпического 
            путешествия. Враждебный мир Арракиса приготовил для него множество тяжелых 
            испытаний, но только тот, кто готов взглянуть в глаза своему страху, достоин стать 
            избранным.
          </p>
        </div>

        <div class="col-lg-12">
          <a href="show.php" class="btn btn-lg btn-warning pull-right">подробнее</a>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="well clearfix">
        <div class="col-lg-3 col-md-2 text-center">
          <img class="img-thumbnail" src="assets/img/kruella.png" alt="круэлла">
          <p>Круэлла</p>
        </div>

        <div class="col-lg-9 col-md-10">
          <p>Великобритания, 1960-е годы. Эстелла была необычным ребёнком, и особенно трудно 
            ей было мириться со всякого рода несправедливостью. Вылетев из очередной школы, 
            она с мамой отправляется в Лондон. По дороге они заезжают в особняк известной
            модельерши по имени Баронесса, где в результате ужасного несчастного случая 
            мама погибает. Добравшись до Лондона, Эстелла знакомится с двумя мальчишками — 
            уличными мошенниками Джаспером и Хорасом.
            10 лет спустя та же компания промышляет на улицах британской столицы мелким 
            воровством, но Эстелла никак не может оставить мечту сделать карьеру в мире моды. 
            Хитростью устроившись в фешенебельный универмаг, девушка привлекает внимание 
            Баронессы, и та берёт её к себе в штат дизайнеров.
          </p>
        </div>

        <div class="col-lg-12">
          <a href="show2.php" class="btn btn-lg btn-warning pull-right">подробнее</a>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="well clearfix">
        <div class="col-lg-3 col-md-2 text-center">
          <img class="img-thumbnail" src="assets/img/privatecheerin.png" alt="рядовой чээрин">
          <p>Рядовой Чээрин</p>
        </div>

        <div class="col-lg-9 col-md-10">
          <p>Глубокая осень 1943 года. Немецкие снайперы хозяйничают на передовой. Молодой охотник 
            Егор Чээрин, только прибывший на фронт, становится снайпером. В первом же бою ему удается 
            проявить себя, он вступает в схватку с немецкими захватчиками и меняет баланс сил на передовой.
          </p>
        </div>

        <div class="col-lg-12">
          <a href="show3.php" class="btn btn-lg btn-warning pull-right">подробнее</a>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="well clearfix">
        <div class="col-lg-3 col-md-2 text-center">
          <img class="img-thumbnail" src="assets/img/wrathofman.png" alt="гнев человеческий">
          <p>Гнев человеческий</p>
        </div>

        <div class="col-lg-9 col-md-10">
          <p>Эйч — загадочный и холодный на вид джентльмен, но внутри него пылает жажда мести. 
            Преследуя свои мотивы, он внедряется в инкассаторскую компанию, чтобы выйти на 
            соучастников серии многомиллионных ограблений, потрясших Лос-Анджелес. В этой 
            запутанной игре у каждого своя роль, но под подозрением оказываются все. Виновных 
            же обязательно постигнет гнев человеческий.
          </p>
        </div>

        <div class="col-lg-12">
          <a href="show4.php" class="btn btn-lg btn-warning pull-right">подробнее</a>
        </div>
      </div>
    </div>


    
    <div class="marging-8 clear"></div>


  </div>


  <div class="col-lg-3 col-lg-pull-9">

    <div class="panel panel-info hidden-xs">
      <div class="panel-heading"><div class="sidebar-header">Поиск</div></div>
      <div class="panel-body">
        <form role="search">
          <div class="form-group">
            <div class="input-group">
              <input type="search" class="form-control input-lg" placeholder="Ваш запрос">
              <div class="input-group-btn">
                <button class="btn btn-default btn-lg" type="submit"><i class="glyphicon glyphicon-search"></i></button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>

   

    <div class="panel panel-info">
      <div class="panel-heading"><div class="sidebar-header">Новости</div></div>
      <div class="panel-body">
        <p>31.10.2021</p>
        <p>Мы запустили новый сервис</p>
      </div>
    </div>

    <div class="panel panel-info">
      <div class="panel-heading"><div class="sidebar-header">Рейтинг фильмов</div></div>
      <div class="panel-body">
        <ul class="list-group">

          <li class="list-group-item list-group-warning">
            <span class="badge">7.9</span>
            <a href="show.php">Дюна</a>
          </li>

          <li class="list-group-item list-group-warning">
            <span class="badge">7.4</span>
            <a href="show2.php">Круэлла</a>
          </li>

          <li class="list-group-item list-group-warning">
            <span class="badge">7.3</span>
            <a href="show3.php">Рядовой Чээрин</a>
          </li>

          <li class="list-group-item list-group-warning">
            <span class="badge">7.7</span>
            <a href="show4.php">Гнев человеческий</a>
          </li>

        </ul>
      </div>
    </div>




  </div>


  </div>

</div>

<div class="clear"></div>

</div>


<?php
    //Подключение шапки
    require_once("footer.php");
?>