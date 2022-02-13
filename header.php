<?php
    //Запускаем сессию
    session_start();
?>

<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Киномонстр</title>

    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Main Style -->
    <link href="assets/css/stylee.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
        "use strict";
        //================ Проверка email ==================
 
        //регулярное выражение для проверки email
        var pattern = /^[a-z0-9][a-z0-9\._-]*[a-z0-9]*@([a-z0-9]+([a-z0-9-]*[a-z0-9]+)*\.)+[a-z]+/i;
        var mail = $('input[name=email]');
         
        mail.blur(function(){
            if(mail.val() != ''){
 
                // Проверяем, если введенный email соответствует регулярному выражению
                if(mail.val().search(pattern) == 0){
                    // Убираем сообщение об ошибке
                    $('#valid_email_message').text('');
 
                    //Активируем кнопку отправки
                    $('input[type=submit]').attr('disabled', false);
                }else{
                    //Выводим сообщение об ошибке
                    $('#valid_email_message').text('Не правильный Email');
 
                    // Дезактивируем кнопку отправки
                    $('input[type=submit]').attr('disabled', true);
                }
            }else{
                $('#valid_email_message').text('Введите Ваш email');
            }
        });
 
        //================ Проверка длины пароля ==================
        var password = $('input[name=password]');
         
        password.blur(function(){
            if(password.val() != ''){
 
                //Если длина введенного пароля меньше шести символов, то выводим сообщение об ошибке
                if(password.val().length < 6){
                    //Выводим сообщение об ошибке
                    $('#valid_password_message').text('Минимальная длина пароля 6 символов');
 
                    // Дезактивируем кнопку отправки
                    $('input[type=submit]').attr('disabled', true);
                     
                }else{
                    // Убираем сообщение об ошибке
                    $('#valid_password_message').text('');
 
                    //Активируем кнопку отправки
                    $('input[type=submit]').attr('disabled', false);
                }
            }else{
                $('#valid_password_message').text('Введите пароль');
            }
        });
    });
    </script>
    
  </head>
  <body>
    
    

    <div class="container-fluid">
      <div class="row">
       
       <nav role="navigation" class="navbar navbar-inverse">
          <div class="container">

          <div class="navbar-header header">

            <div class="container">
              
              <div class="row">
                
                <div class="col-lg-12">

                  

                      <div id="auth_block">
          
                      <?php
                          //Проверяем авторизован ли пользователь
                          if(!isset($_SESSION['email']) && !isset($_SESSION['password'])){
                              // если нет, то выводим блок с ссылками на страницу регистрации и авторизации
                      ?>
                              <div id="link_register">
                                  <a href="/form_register.php">Регистрация</a>
                              </div>
                      
                              <div id="link_auth">
                                  <a href="/form_auth.php">Авторизация</a>
                              </div>
                      <?php
                          }else{
                              //Если пользователь авторизован, то выводим ссылку Выход
                      ?> 
                              <div id="link_logout">
                                  <a href="/logout.php">Выход</a>
                              </div>
                      <?php
                          }
                      ?>
          
                      </div>
                      <div class="clear"></div>
              
                           

                  <h1><a href="index.php">КиноМонстр</a></h1> 
                  <p>Кино - наша страсть!</p>
                </div>

              </div>

            </div>

       
            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
              
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>

            </button>
          

          </div>
            
            <div id="navbarCollapse" class="collapse navbar-collapse navbar-right">
              
              <ul class="nav nav-pills">
                <li> <a href="index.php">Главная</a> </li>
                <li> <a href="films.php">Фильмы</a> </li>
                <li> <a href="serials.php">Сериалы</a> </li>
                <li> <a href="raiting.php">Рейтинг фильмов</a> </li>
                <li> <a href="contact.php">Контакты</a> </li>

              </ul>


            </div>

          </div>
       </nav> 

      </div>
    </div>