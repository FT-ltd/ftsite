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
<!-- Билеты -->
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
              <a class="link-head active" href="tickets.php">Билеты</a>
            </li>
            <li>
              <a class="link-head" href="exam.php">Экзамен</a>
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
                <div class="col-2">
                  <div class="list-group content-border" id="list-tab" role="tablist">
                    <a class="list-group-item menu-ped list-group-item-action active" id="list-ticket-list" data-toggle="list"
                     href="#list-ticket" role="tab" aria-controls="ticket">Правила</a>
                    <a class="list-group-item menu-ped list-group-item-action" id="list-ticket1-list" data-toggle="list"
                     href="#list-ticket1" role="tab" aria-controls="ticket1">Билет 1</a>
                    <a class="list-group-item menu-ped list-group-item-action" id="list-ticket2-list" data-toggle="list" 
                    href="#list-ticket2" role="tab" aria-controls="ticket2">Билет 2</a>
                    <a class="list-group-item menu-ped list-group-item-action" id="list-ticket3-list" data-toggle="list" 
                    href="#list-ticket3" role="tab" aria-controls="ticket3">Билет 3</a>
                    <a class="list-group-item menu-ped list-group-item-action" id="list-ticket4-list" data-toggle="list" 
                    href="#list-ticket4" role="tab" aria-controls="ticket4">Билет 4</a>
                    <a class="list-group-item menu-ped list-group-item-action" id="list-ticket5-list" data-toggle="list" 
                    href="#list-ticket5" role="tab" aria-controls="ticket5">Билет 5</a>
                    <a class="list-group-item menu-ped list-group-item-action" id="list-ticket6-list" data-toggle="list" 
                    href="#list-ticket6" role="tab" aria-controls="ticket6">Билет 6</a>
                    <a class="list-group-item menu-ped list-group-item-action" id="list-ticket7-list" data-toggle="list" 
                    href="#list-ticket7" role="tab" aria-controls="ticket7">Билет 7</a>
                    <a class="list-group-item menu-ped list-group-item-action" id="list-ticket8-list" data-toggle="list" 
                    href="#list-ticket8" role="tab" aria-controls="ticket8">Билет 8</a>
                    <a class="list-group-item menu-ped list-group-item-action" id="list-ticket9-list" data-toggle="list" 
                    href="#list-ticket9" role="tab" aria-controls="ticket9">Билет 9</a>
                    <a class="list-group-item menu-ped list-group-item-action" id="list-ticket10-list" data-toggle="list" 
                    href="#list-ticket10" role="tab" aria-controls="ticket10">Билет 10</a>
                    <a class="list-group-item menu-ped list-group-item-action" id="list-ticket11-list" data-toggle="list" 
                    href="#list-ticket11" role="tab" aria-controls="ticket11">Билет 11</a>
                    <a class="list-group-item menu-ped list-group-item-action" id="list-ticket12-list" data-toggle="list" 
                    href="#list-ticket12" role="tab" aria-controls="ticket12">Билет 12</a>
                    <a class="list-group-item menu-ped list-group-item-action" id="list-ticket13-list" data-toggle="list" 
                    href="#list-ticket13" role="tab" aria-controls="ticket13">Билет 13</a>
                    <a class="list-group-item menu-ped list-group-item-action" id="list-ticket14-list" data-toggle="list" 
                    href="#list-ticket14" role="tab" aria-controls="ticket14">Билет 14</a>
                    <a class="list-group-item menu-ped list-group-item-action" id="list-ticket15-list" data-toggle="list" 
                    href="#list-ticket15" role="tab" aria-controls="ticket15">Билет 15</a>
                    <a class="list-group-item menu-ped list-group-item-action" id="list-ticket16-list" data-toggle="list" 
                    href="#list-ticket16" role="tab" aria-controls="ticket16">Билет 16</a>
                    <a class="list-group-item menu-ped list-group-item-action" id="list-ticket17-list" data-toggle="list" 
                    href="#list-ticket17" role="tab" aria-controls="ticket17">Билет 17</a>
                    <a class="list-group-item menu-ped list-group-item-action" id="list-ticket18-list" data-toggle="list" 
                    href="#list-ticket18" role="tab" aria-controls="ticket18">Билет 18</a>
                    <a class="list-group-item menu-ped list-group-item-action" id="list-ticket19-list" data-toggle="list" 
                    href="#list-ticket19" role="tab" aria-controls="ticket19">Билет 19</a>
                    <a class="list-group-item menu-ped list-group-item-action" id="list-ticket20-list" data-toggle="list" 
                    href="#list-ticket20" role="tab" aria-controls="ticket20">Билет 20</a>
                  </div>
                </div>
                
                <div class="col-10">
                  <div class="tab-content content-border" id="nav-tabContent" >
                    <div class="tab-pane fade show active" id="list-ticket" role="tabpanel" aria-labelledby="list-ticket-list">
                        <div class="named">
                            <h3>Правила</h3>
                        </div>
                        <div class="content">
                            <hr>
                            <p>
                                В данном разделе сайта, вам предоставленны актуальные билеты с вопросами, встречающимися 
                                на экзамене в ГИБДД. Вы можете выбрать любой из 20-ти билетов. Время на выполнение билета 
                                ограниченно (20 минут), как только вы переходите по ссылке выбранного вами билета, запускается
                                обратный отсчет. Как ответите на все вопросы, нажимаете кнопку "завершить", тогда сможете 
                                ознакомиться с результатами решения. Если до момента истечения времени вы не нажали кнопку "завершить"
                                или не ответили на все вопросы, билет закрывается автоматически, и перед вами выводятся результаты.
                                После первого решения билета в личном кабинете в разделе оценки вам будет выставлена оценка от 0% до 100%.
                                Билеты можно решать неограниченное количество раз, в личном кабинете сохраняется наивысшая оценка.
                            </p>
                            <hr>
                            <p>
                               Желаем удачи!
                            </p>
                            <hr>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="list-ticket1" role="tabpanel" aria-labelledby="list-ticket1-list">
                        <div class="named">
                            <h3>Билет 1</h3>
                        </div>
                        <div class="content">
                            <hr>
                            <div class="bilet">
                                
                            </div>
                            <hr>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="list-ticket2" role="tabpanel" aria-labelledby="list-ticket2-list">
                        <div class="named">
                            <h3>Билет 2</h3>
                        </div>
                        <div class="content">
                            <hr>
                            <div class="bilet">
                                
                            </div>
                            <hr>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="list-ticket3" role="tabpanel" aria-labelledby="list-ticket3-list">
                        <div class="named">
                            <h3>Билет 3</h3>
                        </div>
                        <div class="content">
                            <hr>
                            <div class="bilet">
                                
                            </div>
                            <hr>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="list-ticket4" role="tabpanel" aria-labelledby="list-ticket4-list">
                        <div class="named">
                            <h3>Билет 4</h3>
                        </div>
                        <div class="content">
                            <hr>
                            <div class="bilet">
                                
                            </div>
                            <hr>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="list-ticket5" role="tabpanel" aria-labelledby="list-ticket5-list">
                        <div class="named">
                            <h3>Билет 5</h3>
                        </div>
                        <div class="content">
                            <hr>
                            <div class="bilet">
                                
                            </div>
                            <hr>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="list-ticket6" role="tabpanel" aria-labelledby="list-ticket6-list">
                        <div class="named">
                            <h3>Билет 6</h3>
                        </div>
                        <div class="content">
                            <hr>
                            <div class="bilet">
                                
                            </div>
                            <hr>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="list-ticket7" role="tabpanel" aria-labelledby="list-ticket7-list">
                        <div class="named">
                            <h3>Билет 7</h3>
                        </div>
                        <div class="content">
                            <hr>
                            <div class="bilet">
                                
                            </div>
                            <hr>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="list-ticket8" role="tabpanel" aria-labelledby="list-ticket8-list">
                        <div class="named">
                            <h3>Билет 8</h3>
                        </div>
                        <div class="content">
                            <hr>
                            <div class="bilet">
                                
                            </div>
                            <hr>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="list-ticket9" role="tabpanel" aria-labelledby="list-ticket9-list">
                        <div class="named">
                            <h3>Билет 9</h3>
                        </div>
                        <div class="content">
                            <hr>
                            <div class="bilet">
                                
                            </div>
                            <hr>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="list-ticket10" role="tabpanel" aria-labelledby="list-ticket10-list">
                        <div class="named">
                            <h3>Билет 10</h3>
                        </div>
                        <div class="content">
                            <hr>
                            <div class="bilet">
                                
                            </div>
                            <hr>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="list-ticket11" role="tabpanel" aria-labelledby="list-ticket11-list">
                        <div class="named">
                            <h3>Билет 11</h3>
                        </div>
                        <div class="content">
                            <hr>
                            <div class="bilet">
                                
                            </div>
                            <hr>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="list-ticket12" role="tabpanel" aria-labelledby="list-ticket12-list">
                        <div class="named">
                            <h3>Билет 12</h3>
                        </div>
                        <div class="content">
                            <hr>
                            <div class="bilet">
                                
                            </div>
                            <hr>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="list-ticket13" role="tabpanel" aria-labelledby="list-ticket13-list">
                        <div class="named">
                            <h3>Билет 13</h3>
                        </div>
                        <div class="content">
                            <hr>
                            <div class="bilet">
                                
                            </div>
                            <hr>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="list-ticket14" role="tabpanel" aria-labelledby="list-ticket14-list">
                        <div class="named">
                            <h3>Билет 14</h3>
                        </div>
                        <div class="content">
                            <hr>
                            <div class="bilet">
                                
                            </div>
                            <hr>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="list-ticket15" role="tabpanel" aria-labelledby="list-ticket15-list">
                        <div class="named">
                            <h3>Билет 15</h3>
                        </div>
                        <div class="content">
                            <hr>
                            <div class="bilet">
                                
                            </div>
                            <hr>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="list-ticket16" role="tabpanel" aria-labelledby="list-ticket16-list">
                        <div class="named">
                            <h3>Билет 16</h3>
                        </div>
                        <div class="content">
                            <hr>
                            <div class="bilet">
                                
                            </div>
                            <hr>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="list-ticket17" role="tabpanel" aria-labelledby="list-ticket17list">
                        <div class="named">
                            <h3>Билет 17</h3>
                        </div>
                        <div class="content">
                            <hr>
                            <div class="bilet">
                                
                            </div>
                            <hr>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="list-ticket18" role="tabpanel" aria-labelledby="list-ticket18-list">
                        <div class="named">
                            <h3>Билет 18</h3>
                        </div>
                        <div class="content">
                            <hr>
                            <div class="bilet">
                                
                            </div>
                            <hr>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="list-ticket19" role="tabpanel" aria-labelledby="list-ticket19-list">
                        <div class="named">
                            <h3>Билет 19</h3>
                        </div>
                        <div class="content">
                            <hr>
                            <div class="bilet">
                                
                            </div>
                            <hr>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="list-ticket20" role="tabpanel" aria-labelledby="list-ticket20-list">
                        <div class="named">
                            <h3>Билет 20</h3>
                        </div>
                        <div class="content">
                            <hr>
                            <div class="bilet">
                                
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