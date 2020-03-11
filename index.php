<?php include __DIR__.'/assets/php/config.php'; ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Главная</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    
</head>

<?php if(AUTH) { //Если мы авторизированы

    header('Location: main.php');

 } else { //Если мы не авторизированы  ?>


<!-- Страница входа --> 
<body class="bg-AliceBlue">
    <div class="container">
        <div class="row">
            <div class="header enter-logo text-center">
                <div class="col-lg-12">
                    <h2>Автошкола Прокатимся!</h2>
                    <h3>Теория Онлайн</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="content enter enter-border">
                    <div class="col-lg-12">
                        <form id = 'forma' action= 'assets/php/login.php' method = 'post'>
                            <div class="form-group">
                            <label for="inputEmail">Чтобы продолжить, войдите в систему</label>
                            <input type="email" name="login" class="form-control" id="inputEmail" aria-describedby="emailHelp" placeholder="Email">
                            </div>
                            <div class="form-group">
                            <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Пароль">
                            <span><a href="#">забыли пароль?</a></span> 
                            <?php if(!empty($message)) { ?>
                             <p><?php echo $message; ?></p>
                             <?php } ?>
                            </div>
                            <div class="form-group form-check">
                            <input type="checkbox" name ="checkbox" class="form-check-input" id="rememberMe">
                            <label class="form-check-label" for="rememberMe">Запомнить</label>
                            </div>
                            <button type="submit" class="btn btn-enter">Войти</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="container">
            <p class="text-center"><a href="#">2020</a></p>
        </div>
    </footer>
    
   
    <?php } ?>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>