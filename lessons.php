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
<!-- Уроки -->
    <nav class="navbar navbar-expand-lg navbar-light bg-AliceBlue">
        <a class="navbar-brand tc-Teal" href="main.html" >Теория Онлайн</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
         aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse m-23" id="navbarText">
          <ul class="navbar-nav mr-auto">
            <li class="active">
              <a class="link-head" href="main.php">Главная <span class="sr-only">(current)</span></a>
            </li>
            <li >
              <a class="link-head" href="#">Уроки</a>
            </li>
            <li>
              <a class="link-head" href="#">ПДД</a>
            </li>
            <li>
              <a class="link-head" href="#">Билеты</a>
            </li>
            <li>
              <a class="link-head" href="#">Экзамен</a>
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
                    <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list"
                     href="#list-home" role="tab" aria-controls="home">Новости</a>
                    <a class="list-group-item list-group-item-action" id="list-rules-list" data-toggle="list"
                     href="#list-rules" role="tab" aria-controls="rules">Правила курса</a>
                    <a class="list-group-item list-group-item-action" id="list-info-list" data-toggle="list" 
                    href="#list-info" role="tab" aria-controls="info">Полезная информация</a>
                    <a class="list-group-item list-group-item-action" id="list-contacts-list" data-toggle="list" 
                    href="#list-contacts" role="tab" aria-controls="contacts">Контакты</a>
                  </div>
                </div>
                <div class="col-6">
                  <div class="tab-content content-border" id="nav-tabContent" >
                    <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                        <div class="named">
                            <h3>Новости</h3>
                        </div>
                        <div class="content">
                            <hr>
                            <p>
                                Уважаемые студенты 1 курса. Из-за технического сбоя в СДО, 
                                повторное открытие в тестов за 1 семестр продлено до 
                                06.03.2020.
                            </p>
                            <hr>
                            <p>
                                Уважаемые студенты 1 курса. Из-за технического сбоя в СДО, 
                                повторное открытие в тестов за 1 семестр продлено до 
                                06.03.2020.
                            </p>
                            <hr>
                            <p>
                                Уважаемые студенты 1 курса. Из-за технического сбоя в СДО, 
                                повторное открытие в тестов за 1 семестр продлено до 
                                06.03.2020.
                            </p>
                            <hr>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="list-rules" role="tabpanel" aria-labelledby="list-rules-list">
                        <div class="named">
                            <h3>Правила курса</h3>
                        </div>
                        <div class="content">
                            <hr>
                            <p>
                                Настоятельно рекомендуется посещение очных занятий и ведение конспекта.
                                Контрольная работа высылается на проверку в электронном виде в сроки 
                                установленные временным графиком изучения дисциплины.
                                Условиями получения оценки являются:
                                -наличие зачтенной контрольной работы
                                -успешное прохождение всех тестов
                                -Оценка за экзамен выставляется в зависимости от набранного количества баллов.
                                
                                Менее 55 баллов – неудовлетворительно;
                                От 55 до 75 баллов – удовлетворительно;
                                От 75 до 92 баллов – хорошо;
                                От 92 до 100 баллов – отлично.
                                Тесты по данной дисциплине открываться во время сессии НЕ БУДУТ!
                            </p>
                            <hr>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="list-info" role="tabpanel" aria-labelledby="list-info-list">
                        <div class="named">
                            <h3>Полезная информация</h3>
                        </div>
                        <div class="content">
                            <hr>
                            <p>
                                Контент в стадии разработки. Приносим извинения за доставленные неудобства.
                            </p>
                            <hr>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="list-contacts" role="tabpanel" aria-labelledby="list-contacts-list">
                        <div class="named">
                            <h3>Контакты</h3>
                        </div>
                        <div class="content">
                            <hr>
                            <p> 
                                Телефон:  8 (812) 630 15 15 <br>
                                Watsapp: +7 (911) 911 15 15 <br>
                                Почта: info@prokatimcy.ru <br>
                                Адрес: Санкт-Петербург, ул. Савушкина, д. 141, 2 этаж, оф. 202 <br>
                            </p>
                            <p>
                                <img src="assets/img/karta141.png" >
                            </p>
                            <hr>
                        </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3">
                    <div class="content-border">
                        <div class="content-profile">
                            <ul class="list-group">
                                <li class="list-group-item"><a href="#" >Личный кабинет</a></li>
                                <li class="list-group-item">Ваш средний балл: <span class="badge badge-secondary">4,5</span></li>
                                <li class="list-group-item ">Курс выполнен на:</li>
                                <li class="list-group-item text-center "><div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" 
                                    aria-valuemin="0" aria-valuemax="100">25%</div>
                                  </div></li>     
                              </ul>
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