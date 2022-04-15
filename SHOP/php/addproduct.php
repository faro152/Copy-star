<?php 
    require_once('connect.php');


        $PROD_NAME = $_POST['prod_name'];
        $PROD_MANU = $_POST['prod_manufacturer'];
        $PROD_PRICE = $_POST['prod_price'];
        $PROD_CATEGORY = $_POST['prod_category'];
        $img_type = substr($_FILES['img_upload']['type'],0,5);
    if(!empty($_FILES['img_upload']['tmp_name']) and $img_type === 'image'){

        
          
        $img = addslashes(file_get_contents($_FILES['img_upload']['tmp_name']));

        $sql = "INSERT INTO `products` (`id_prod`, `name_prod`, `manufacturer`, `price_prod`, `picture_prod`, `category` ) VALUES (NULL, '$PROD_NAME', '$PROD_MANU', '$PROD_PRICE', '$img', '$PROD_CATEGORY')"; 
        
		$res = mysqli_query($connect, $sql) or die (" Ошибка 1 ". mysqli_error($connect));
    
        }
        header('Location: ../index.php');
    
    $connect->close();
    ?>