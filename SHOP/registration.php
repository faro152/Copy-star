<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Регистрация и авторизация</title>
</head>

<body>

    <header>
        <img class="logo" src="pic/logo.png" alt="">
        </div>
        <div class="header_text">
            COPYSTAR
        </div>
        <div class="header_button">
            <a href="registration.php" class="gradient-button">Вход</a>   
            <a href="index.php" class="gradient-button">Каталог</a>
            <a href="" class="gradient-button">О нас</a>
            <br>
            </div>
    </header>

    <br>
    <div class="catalog_name">
            </br><h1 align = "center"> РЕГИСТРАЦИЯ И АВТОРИЗАЦИЯ </h1><br>
</div>


<div class="reg_auth">

    <div class = "reg_form">
<form action="PHP/registration.php" method="post" enctype="multipart/form-data">
    <div class="inp_name"><h3>Имя: </h3></div>
    <input type="text" name = "firstname" class="type-1" />
    <div class="inp_name"><h3>Фамилия: </h3></div>
    <input type="text" name = "secondname" class="type-1" />
    <div class="inp_name"><h3>Отчество: </h3></div>
    <input type="text" name = "thirdname" class="type-1" />
    <div class="inp_name"><h3>Логин: </h3></div>
    <input type="text" name = "login" class="type-1" />
    <div class="inp_name"><h3>Эл. почта: </h3></div>
    <input type="email" name = "email" class="type-1" />
    <div class="inp_name"><h3> Пароль: </h3></div>
    <input type="password" name = "password" class="type-1" />
    <div class="inp_name"><h3> Повторите пароль: </h3></div>
    <input type="password" name = "password_ch" class="type-1" />
    <br>
    <div class="inp_name"><h2><input type="checkbox">Я согласен с <a href = "">правилами регистрации</a></input></h2></div> 
    <br>
    <button type="submit"<a href="registration.php" class="gradient-button">Завершить регистрацию</a></button>
    <br>
    <?php
        if(isset ($_SESSION['message']))
        {
            echo '<p class="msg"> ' . $_SESSION['message'] . '   </p>';
        }
         unset($_SESSION['message']);
    ?>
    </form>
    </div>

    <div class = "auth_form">
    <form action="php/authorisation.php" method="post" enctype="multipart/form-data">
    <div class="inp_name"><h3>Логин: </h3></div>
    <input type="text" name = "login_auth" class="type-1" />
    <div class="inp_name"><h3>Пароль: </h3></div>
    <input type="password" name = "password_auth" class="type-1" />
    <br>
    <button type="submit"<a href="authorisation.php" class="gradient-button">Завершить авторизацию</a></button>
    <br>
    <?php
        if(isset($_SESSION['message']))
        {
            echo '<p class="msg"> ' . $_SESSION['message'] . '   </p>';
        }
         unset($_SESSION['message']);
    ?>
    </form>
    </div>
    </div>
</body>


</body>
</html>