<?php
session_start();
 require_once 'connect.php';

 $FIRNAME = $_POST['firstname'];
 $SECNAME = $_POST['secondname'];
 $THIRNAME = $_POST['thirdname'];
 $LOGIN = $_POST['login'];
 $EMAIL = $_POST['email'];
 $PASSWORD = $_POST['password'];
 $PASSWORD_CH = $_POST['password_ch'];

 if ($PASSWORD === $PASSWORD_CH) 
 {
 mysqli_query($connect, "INSERT INTO `users`(`id_user`, `Name`, `Surname`, `Patronymic`, `Login`, `Email`, `Password`, `user_role`) VALUES (NULL,'$FIRNAME','$SECNAME','$THIRNAME', '$LOGIN', '$EMAIL', '$PASSWORD','1')");
    $_SESSION['message'] = 'Регистрация прошла успешно';
      header('Location: http://shop/registration.php');
      
 }


 else
 {
     $_SESSION['message'] = 'Пароли не совпадают.';
     header('Location: http://shop/registration.php');
 }

 ?>