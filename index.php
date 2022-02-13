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
         
          <h2>Новые фильмы</h2>
          <hr>
          <div class="row">

            <div class="films_block col-lg-3 col-md-3 col-sm-3 col-xs-6">
              <img src="assets/img/dune.png" alt="дюна">
              <div class="film_label">Дюна</div>
            </div>

            <div class="films_block col-lg-3 col-md-3 col-sm-3 col-xs-6">
              <img src="assets/img/kruella.png" alt="круэлла">
              <div class="film_label">Круэлла</div>
            </div>

            <div class="films_block col-lg-3 col-md-3 col-sm-3 col-xs-6">
              <img src="assets/img/privatecheerin.png" alt="рядовой чээрин">
              <div class="film_label">Рядовой Чээрин</div>
            </div>

            <div class="films_block col-lg-3 col-md-3 col-sm-3 col-xs-6">
              <img src="assets/img/wrathofman.png" alt="гнев человеческий">
              <div class="film_label">Гнев человеческий</div>
            </div>


          </div>

          <div class="margin-8"></div>

          <h2>Новые сериалы</h2>
          <hr>
          <div class="row">

            <div class="films_block col-lg-3 col-md-3 col-sm-3 col-xs-6">
              <img src="assets/img/squidgame.png" alt="игра в кальмара">
              <div class="film_label">Игра в кальмара</div>
            </div>

            <div class="films_block col-lg-3 col-md-3 col-sm-3 col-xs-6">
              <img src="assets/img/elite.png" alt="элита">
              <div class="film_label">Элита</div>
            </div>

            <div class="films_block col-lg-3 col-md-3 col-sm-3 col-xs-6">
              <img src="assets/img/cateringunit.png" alt="пищеблок">
              <div class="film_label">Пищеблок</div>
            </div>

            <div class="films_block col-lg-3 col-md-3 col-sm-3 col-xs-6">
              <img src="assets/img/lacasadepapel.png" alt="бумажный дом">
              <div class="film_label">Бумажный дом</div>
            </div>


          </div>

          <div class="margin-8"></div>

          <a href="#"> <h3>Премьера фильма</h3></a>
          <hr>
          <p>
            Мировая премьера «Дюны» состоялась 3 сентября 2021 года во время 78-го Венецианского 
            кинофестиваля. Специальный показ фильма также прошёл на Международном кинофестивале 
            в Торонто. Выход фильма в широкий мировой прокат растянется на месяц: зрители Бельгии 
            и Франции увидели ленту первыми — 15 сентября, зрители России — 16 сентября, а зрители 
            Турции и Канады увидят картину 22 октября. Премьера фильма в США также состоится 22 
            октября одновременно в кинотеатрах и на стриминг-сервисе HBO Max, где картина будет 
            доступна в течение 31 дня.
          </p>

          <div class="margin-8"></div>

          <a href="read1.php"> <h3>Где и как снимали фильм Дюна</h3></a>
          <hr>
          <p>
            Основная часть съёмок началась 18 марта 2019 года на киностудии Origo в Будапеште.
            Производство также проходило в иорданской пустыне Вади-Рам. Норвежский полуостров
            Стад послужил местом натурных съёмок для планеты Каладан.
          </p>
          <a href="read1.php" class="btn btn-warning pull-right">Читать</a>

          <div class="margin-8 clear"></div>

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