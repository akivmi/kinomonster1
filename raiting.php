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
         
            <div class="content">
               	
            <table>
                
                <tr>
                    <th></th>
                    <th>Фильмы и сериалы</th>
                    <th class="center">Год</th>
                    <th class="center">Рейтинг</th>
                </tr>

                <tr>
                    <td class="center"> <img src="assets/img/dune.png"></td>
                    <td>1. <a href="show.php">Дюна</a></td>
                    <td class="center">2021</td>
                    <td class="center rating">7.9</td>
                </tr>

                <tr>
                    <td class="center"> <img src="assets/img/kruella.png"></td>
                    <td>2. <a href="show2.php">Круэлла</a></td>
                    <td class="center">2021</td>
                    <td class="center rating">7.4</td>
                </tr>

                <tr>
                    <td class="center"> <img src="assets/img/privatecheerin.png"></td>
                    <td>3. <a href="show3.php">Рядовой Чээрин</a></td>
                    <td class="center">2021</td>
                    <td class="center rating">7.3</td>
                </tr>

                <tr>
                    <td class="center"> <img src="assets/img/wrathofman.png"></td>
                    <td>4. <a href="show4.php">Гнев человеческий</a></td>
                    <td class="center">2021</td>
                    <td class="center rating">7.7</td>
                </tr>

                <tr>
                    <td class="center"> <img src="assets/img/squidgame.png"></td>
                    <td>5. <a href="show5.php">Игра в кальмара</a></td>
                    <td class="center">2021</td>
                    <td class="center rating">7.6</td>
                </tr>

                <tr>
                    <td class="center"> <img src="assets/img/elite.png"></td>
                    <td>6. <a href="show6.php">Элита</a></td>
                    <td class="center">2018-2021</td>
                    <td class="center rating">7.7</td>
                </tr>

                <tr>
                    <td class="center"> <img src="assets/img/cateringunit.png"></td>
                    <td>7. <a href="show7.php">Пищеблок</a></td>
                    <td class="center">2021</td>
                    <td class="center rating">7.4</td>
                </tr>

                <tr>
                    <td class="center"> <img src="assets/img/lacasadepapel.png"></td>
                    <td>8. <a href="show8.php">Бумажный дом</a></td>
                    <td class="center">2017-2021</td>
                    <td class="center rating">8.0</td>
                </tr>

            </table>
            </div>


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