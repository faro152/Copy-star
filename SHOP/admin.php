<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Панель администратора</title>
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
            </br><h1 align = "center"> ПАНЕЛЬ РЕДАКТИРОВАНИЯ ТОВАРОВ </h1><br>
</div>

<div class="redact_forms">
    <div class = "add_product_form">
<form action="php/addproduct.php" method="post" enctype="multipart/form-data">
<div class="inp_name"><h3>Наименование товара: </h3></div>
    <input type="text" name = "prod_name" class="type-1" />
    <div class="inp_name"><h3>Производитель: </h3></div>
    <input type="text" name = "prod_manufacturer" class="type-1" />
    <div class="inp_name"><h3>Цена: </h3></div>
    <input type="text" name = "prod_price" class="type-1" />
    <div class="inp_name"><h3>Изображение товара: </h3></div>
    <input type="submit" name="upload" id="" value = "Загрузить">
    <input type="file" name = "img_upload">
    <div class="inp_name"><h3>Категория товара: </h3></div>
    <input type="text" name = "prod_category" class="type-1" />
    <br>
    <button type="submit"<a href="addproduct.php" class="gradient-button">Добавить товар</a></button>
    <br>
    </form>
</div>

    <div class = "delete_product_form">
<form action="php/delproduct.php" method="post" enctype="multipart/form-data">
<div class="inp_name"><h3>Введите ID товара: </h3></div>
    <input type="text" name = "prod_name" class="type-1" />
    <br>
    <button type="submit"<a href="delproduct.php" class="gradient-button">Удалить товар</a></button>
    <br>
    </form>
</div>
</div>

<div class = "product_list">
<form action="php/prodlist.php" method="post" enctype="multipart/form-data">
<br>
    <button type="submit"<a href="delproduct.php" class="gradient-button">Показать список товаров</a></button>
    <br>
    </form>
</div>


</body>
</html>