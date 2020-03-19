<?php
 require_once __DIR__.'conenct.php';

if(!AUTH) {
      $username = $_POST['user'];
      $password = $_POST['password'];


      $username = stripcslashes($username);
      $password = stripcslashes($password);
      
      

    //авторизация не прошла, сохраним ошибку
    $_SESSION['message'] = 'Неверный логин или пароль';
  }
 else {
    if(isset($_GET['logout'])) { //выход из системы
        unset($_SESSION['user']);
        setcookie('login', '', time() - 3600 * 24 * 365, '/');
        setcookie('password', '', time() - 3600 * 24 * 365, '/');
    }
}
header('Location:../../index.php'); //переходим на главную страницу