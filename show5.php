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

          <h1>Трейлер</h1>
          <hr>

          <div class="embed-responsive embed-responsive-16by9">
            <iframe width="1350" height="480" src="https://www.youtube.com/embed/Ss3h4FlIjzs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <div class="well info-block text-center">
            Год: <span class="badge">2021</span>
            Рейтинг: <span class="badge">7.6</span>
            Режиссёр: <span class="badge">Хван Дон-хёк</span>
          </div>

          <div class="margin-8"></div>

          <h2>Обзор</h2>
          <hr>

          <div class="well">
            Сон Ги-хун уже немолод, разведён, по уши погряз в долгах и сидит на шее у 
            старенькой матери. Даже выигранные на скачках деньги в его руках долго не 
            задерживаются, и однажды он встречает в метро загадочного незнакомца, который 
            сначала предлагает сыграть в детскую игру, а затем вручает Ги-хуну немалую 
            сумму и визитку. Но радость мужчины сменятся отчаянием, когда он узнаёт, что 
            бывшая жена с новым мужем собираются увезти его дочь в Америку. Он звонит по 
            номеру с визитки и становится последним участником тайных игр на выживание с 
            призом в 40 миллионов долларов. Среди товарищей по несчастью оказываются его 
            друг детства — прогоревший финансист, бандит, смертельно больной старик, 
            северокорейская перебежчица, иммигрант из Пакистана и многие другие отчаянно 
            нуждающиеся в деньгах.
          </div>

          <div class="margin-8"></div>

          <h2>Отзывы о фильме</h2>
          <hr>

          <div class="panel panel-info">
            <div class="panel-heading"><i class="glyphicon glyphicon-user"></i> <span>Сергей</span> </div>
            <div class="panel-body">
              Отличный фильм, 3 часа пролетели не заметно.
            </div>
          </div>

          <div class="panel panel-info">
            <div class="panel-heading"><i class="glyphicon glyphicon-user"></i> <span>Иван</span> </div>
            <div class="panel-body">
              Отличный фильм!!!
            </div>
          </div>

          <form>
            <div class="form-group">
              <input type="text" placeholder="ваше имя" class="form-control input-lg">
            </div>
            <div class="form-group">
              <textarea class="form-control"></textarea>
            </div>
            <button class="btn btn-lg btn-warning pull-right">отправить</button>
          </form>

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