<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Главная страница</title>
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

    <nav>
			    <ul>

			        <li><a href="#">Принтеры</a>
                    <ul>
			                <li><a href="#">Brother</a></li>
			                <li><a href="#">Canon</a></li>
			                <li><a href="#">Epson</a></li>
                            <li><a href="#">HP</a></li>
			            </ul>
                </li>

                <li><a href="#">Сканеры</a>
                    <ul>
			                <li><a href="#">Acer</a></li>
			                <li><a href="#">Agfa</a></li>
			                <li><a href="#">Artec</a></li>
                            <li><a href="#">Citizen</a></li>
			            </ul>
                </li>
			    </ul>
			</nav>

<div class="catalog_name">
            </br><h1 align = "center"> Принтеры </h1><br>
</div>

            <div class="scrollmenu">
<div class = "Info_2">
<?php
 $connect = mysqli_connect("localhost", "root", "","shop") or die ("Ошибка". mysqli_error($conn));
        $vivod = mysqli_query($connect, "SELECT * FROM `Products` WHERE `category` = 0 ");
        $tu = mysqli_fetch_assoc($vivod);
        while($row = $vivod->fetch_assoc()){
            ?>

  <a href="Products"><div class = "Prod_name"> 
                <?php echo $row['name_prod']; ?>  
        </div>
              <div class = "Prod_Manufacturer">   
                <?php echo $row['manufacturer']; ?>     
        </div>
        
        <div class = "Picture">
            <?php $show_img = base64_encode($row['picture_prod']);?>         
<img src="data:image/jpeg;base64, <?php echo $show_img;?>" alt=""></img>
<div class = "Price">   
                <?php echo $row['price_prod']; ?> руб. 
                
        </div>
</div>
</a>

<?php
}
           
        ?>
</div>
</div>
</div>
</div>
<br>

<div class="catalog_name">
            </br><h1 align = "center"> Сканеры </h1><br>
</div>

            <div class="scrollmenu">
<div class = "Info_2">
<?php
 $connect = mysqli_connect("localhost", "root", "","shop") or die ("Ошибка". mysqli_error($conn));
        $vivod_2 = mysqli_query($connect, "SELECT * FROM `Products` WHERE `category` = 1 ");
        $tu_2 = mysqli_fetch_assoc($vivod);
        while($row = $vivod_2->fetch_assoc()){
            ?>

  <a href="Products"><div class = "Prod_name"> 
                <?php echo $row['name_prod']; ?>  
        </div>
              <div class = "Prod_Manufacturer">   
                <?php echo $row['manufacturer']; ?>     
        </div>
        
        <div class = "Picture">
            <?php $show_img_2 = base64_encode($row['picture_prod']);?>         
<img src="data:image/jpeg;base64, <?php echo $show_img_2;?>" alt=""></img>
<div class = "Price">   
                <?php echo $row['price_prod']; ?> руб. 
                
        </div>
</div>
</a>

<?php
}
           
        ?>
</div>
</div>
</div>
</div>
<br><br>
</div>


</body>


</html>