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
<body>
<!-- Экзамен -->
    <nav class="navbar navbar-expand-lg navbar-light bg-AliceBlue">
        <a class="navbar-brand tc-Teal" href="main.php" >Теория Онлайн</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
         aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
          <div class="btn-group">
            <button class="btn btn-person btn-sm dropdown-toggle" type="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
               Фудзияма Ф. Ф.
            </button>
            <div class="dropdown-menu person">
                <a href="#">Профиль</a><br>
                <a href="#">Оценки</a><br>
                <a href="#">Настройки</a><br>
                <a href="#">Выход</a>
            </div>
        </div>
        <div class="collapse navbar-collapse m-12" id="navbarText">
          <ul class="navbar-nav mr-auto">
            <li>
              <a class="link-head" href="main.php">Главная <span class="sr-only">(current)</span></a>
            </li>
            <li >
              <a class="link-head" href="lessons.php">Уроки</a>
            </li>
            <li>
              <a class="link-head" href="pdd.php">ПДД</a>
            </li>
            <li>
              <a class="link-head" href="tickets.php">Билеты</a>
            </li>
            <li>
              <a class="link-head active" href="exam.php">Экзамен</a>
            </li>
          </ul>
          <span>
            <a href="#" data-toggle="tooltip" title="перейти на сайт автошколы" >Автошкола Прокатимся!</a>   
          </span>
        </div>
    </nav>

    <div class="margin-2"></div>
    
    <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-3">
                  <div class="list-group content-border" id="list-tab" role="tablist">
                    <a class="list-group-item list-group-item-action active" id="list-exam-list" data-toggle="list"
                     href="#list-exam" role="tab" aria-controls="exam">Правила</a>
                    <a class="list-group-item list-group-item-action" id="list-exam1-list" data-toggle="list"
                     href="#list-exam1" role="tab" aria-controls="exam1">Экзамен</a>
                  </div>
                </div>
                <div class="col-9">
                  <div class="tab-content content-border" id="nav-tabContent" >
                    <div class="tab-pane fade show active" id="list-exam" role="tabpanel" aria-labelledby="list-exam-list">
                        <div class="named">
                            <h3>Правила</h3>
                        </div>
                        <div class="content">
                        -----
                        </div>
                    </div>
                    <div class="tab-pane fade" id="list-exam1" role="tabpanel" aria-labelledby="list-exam1-list">
                        <div class="named">
                            <h3>Экзамен</h3>
                        </div>
                        <div class="content">
                            <hr>
                                <div class="exam">

                                </div>
                            <hr>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
        </div>
        <div class="clear">
        </div>
    </div>
    <footer>
        <div class="container">
            <p class="text-center"><a href="#">2020</a></p>
        </div>
    </footer>

    
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>