<?php

session_start();
require_once 'connect.php';

$A_LOGIN_AUTH = $_POST['login_auth'];
$A_PASS_AUTH = $_POST['password_auth'];
$sql="SELECT * FROM `users` WHERE `Login`='$A_LOGIN_AUTH' AND`Password`='$A_PASS_AUTH'";
$check_user = mysqli_query($connect, $sql);
if (mysqli_num_rows($check_user) > 0) {
    $role="SELECT * FROM `users` WHERE `Login` = '$A_LOGIN_AUTH'";
    $check_role = mysqli_query($connect, $role);
    $res = $check_role->fetch_array();
 if (($res['user_role']) == 2)
{
        header('Location: http://shop/Admin.php');
    }
    else{
        header('Location: http://shop/registration.php');
    }
} 

else {
    $_SESSION['message'] = 'Неверный логин или пароль.';
    header('Location: http://shop/registration.php');
}


?>
