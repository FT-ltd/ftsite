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
<!-- ПДД -->
<!-- Знаки и разметка:Предупреждающие знаки-->
  <nav class="navbar navbar-expand-lg navbar-light bg-AliceBlue">
    <a name="top" class="navbar-brand tc-Teal" href="main.php" >Теория Онлайн</a>
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
        <div class="col-lg-1">
          <div class="list-group content-border">
            <a class="list-group-item list-group-item-action nv" href="pdd3.php">назад</a>
          </div>
        </div>
        <div class="col-lg-10">
          <div class="content-border">
            <h4 class="text-center tc-Teal">Знаки и разметка</h4>
            <h5 class=" text-center tc-Teal2">1. Предупреждающие знаки</h5>
            <div class="textPdd">
              <p>
              Предупреждающие знаки информируют водителей о приближении к опасному участку дороги, 
              движение по которому требует принятия мер, соответствующих обстановке. Каждый предупреждающий 
              дорожный знак имеет комментарий, поясняющий действие знака дорожного движения в различных ситуациях.
              </p>
              <table class="znakTable">
                <tr>
                  <td class="wid30 alignTablImg text-center">
                    <img class="znakImg" src="assets/img/znak1/znak_1.1.png"><br><span><b>1.1</b></span>
                  </td>
                  <td>
                    <b class="numStyle">1.1 "Железнодорожный переезд со шлагбаумом".</b>
                    <p>
                    Предупреждает о приближении к ж/д переезду со шлагбаумом. Вне населённого пункта (н.п.) 
                    устанавливается на расстоянии 150-300 м, в населённом пункте - на расстоянии 50-100 м. 
                    Знак может устанавливаться и на ином расстоянии, но при этом расстояние оговаривается таб.8.1.1 
                    "Расстояние до объекта". <br> <br> Водителю ТС пересекать ж/д пути можно только по ж/д переездам, 
                    уступая дорогу поезду (локомотиву, дрезине). <br> Знаки 1.1, 1.2 обязательно повторяются вне н. п., 
                    при этом второй знак устанавливается на расстоянии не менее 50 м (всего повторяется вне н. п. 6 знаков). <br> <br>
                    Запрещается:
                    <ol>
                      <li>обгон на ж/д переездах и ближе, чем за 100 м перед ними;</li>
                      <li>остановка и стоянка на ж/д переездах;</li>
                      <li>стоянка ближе 50 м от ж/д переездов;</li>
                      <li>разворот;</li>
                      <li>движение задним ходом;</li>
                      <li>провозить через переезд в нетранспортном положении сельскохозяйственные, дорожные, строительные и 
                      другие машины;</li>
                      <li>движение тихоходных машин, скорость которых менее 8 км/ч, а также тракторных саней-волокуш без 
                      разрешения начальника дистанции пути;</li>
                      <li> объезжать с выездом на полосу встречного движения стоящие перед закрытым шлагбаумом ТС;</li>
                      <li>самовольно открывать шлагбаум.</li>
                    </ol>
                    </p>
                  </td>
              </tr>
              <tr>
                  <td class="wid30 alignTablImg text-center">
                    <img class="znakImg" src="assets/img/znak1/znak_1.2.png"><br><span><b>1.2</b></span>
                  </td>
                  <td>
                    <b class="numStyle">1.2 "Железнодорожный переезд без шлагбаума".</b>
                    <p>
                    Предупреждает о приближении к ж/д переезду без шлагбаума. Вне населённого пункта (н.п.) устанавливается 
                    на расстоянии 150-300 м, в населённом пункте - на расстоянии 50-100 м. Знак может устанавливаться и на 
                    ином расстоянии, но при этом расстояние оговаривается таб.8.1.1 "Расстояние до объекта". <br> <br>
                    Водителю ТС пересекать ж/д пути можно только по ж/д переездам, уступая дорогу поезду (локомотиву, дрезине). <br>
                    Знаки 1.1, 1.2 обязательно повторяются вне н. п., при этом второй знак устанавливается на расстоянии не менее 50 
                    м (всего повторяется вне н. п. 6 знаков). <br> <br>
                    Запрещается:
                    <ol>
                     <li>обгон на ж/д переездах и ближе, чем за 100 м перед ними;</li>
                     <li>остановка и стоянка на ж/д переездах;</li>
                     <li>стоянка ближе 50 м от ж/д переездов;</li>
                     <li>разворот;</li>
                     <li>движение задним ходом;</li>
                     <li>провозить через переезд в нетранспортном положении сельскохозяйственные, дорожные, строительные и другие машины;</li>
                     <li>движение тихоходных машин, скорость которых менее 8 км/ч, а также тракторных саней-волокуш без разрешения начальника 
                      дистанции пути;</li>
                     <li>объезжать с выездом на полосу встречного движения стоящие перед закрытым шлагбаумом ТС;</li>
                     <li>самовольно открывать шлагбаум.</li>
                    </ol>
                    </p>
                  </td>
              </tr>
              <tr>
                  <td class="wid30 alignTablImg text-center">
                    <img class="znakImg" src="assets/img/znak1/znak_1.3.1.png"><br><span><b>1.3.1</b></span>
                  </td>
                  <td>
                    <b class="numStyle">1.3.1 "Однопутная железная дорога".</b>
                    <p>
                    Устанавливается непосредственно перед ж/д переездом. <br>  <br> Устанавливается только при наличии одного пути.
                    </p>
                  </td>
              </tr>
              <tr>
                  <td class="wid30 alignTablImg text-center">
                    <img class="znakImg" src="assets/img/znak1/znak_1.3.2.png"><br><span><b>1.3.2</b></span>
                  </td>
                  <td>
                    <b class="numStyle">1.3.2 "Многопутная железная дорога".</b>
                    <p>
                    Устанавливается непосредственно перед ж/д переездом. <br> <br>
                    Устанавливается при наличии двух и более путей (3, 4, 5 и т. д.). При отсутствии шлагбаумов на 
                    железнодорожном переезде знаки 1.3.1 и 1.3.2 определяют размер переезда.
                    </p>
                  </td>
              </tr>
              <tr>
                  <td class="wid30 alignTablImg text-center">
                    <img class="znakImg" src="assets/img/znak1/znak_1.4.1.png"><img class="znakImg" src="assets/img/znak1/znak_1.4.2.png">
                    <img class="znakImg" src="assets/img/znak1/znak_1.4.3.png"><br><span><b>1.4.1, 1.4.2, 1.4.3</b></span>
                  </td>
                  <td>
                    <b class="numStyle">1.4.1, 1.4.2, 1.4.3 "Приближение к железнодорожному переезду".</b>
                    <p>
                    Дополнительное предупреждение о приближении к железнодорожному переезду вне населенных пунктов. <br> <br>
                    Устанавливаются вне н. п. на расстоянии 150-300 метров, при этом расстояние между знаками пропорциональное. <br> <br>
                    Знаки 1.4.1-1.4.3 устанавливаются с правой стороны дороги.
                    </p>
                  </td>
              </tr>
              <tr>
                  <td class="wid30 alignTablImg text-center">
                  <img class="znakImg" src="assets/img/znak1/znak_1.4.4.png"><img class="znakImg" src="assets/img/znak1/znak_1.4.5.png">
                    <img class="znakImg" src="assets/img/znak1/znak_1.4.6.png"><br><span><b>1.4.4, 1.4.5, 1.4.6</b></span>
                  </td>
                  <td>
                    <b class="numStyle">1.4.4, 1.4.5, 1.4.6 "Приближение к железнодорожному переезду".</b>
                    <p>
                    Дополнительное предупреждение о приближении к железнодорожному переезду вне населенных пунктов. <br> <br>
                    Устанавливаются вне н. п. на расстоянии 150-300 метров, при этом расстояние между знаками пропорциональное. <br> <br>
                    Знаки 1.4.4-1.4.6 устанавливаются с левой стороны дороги.
                    </p>
                  </td>
              </tr>
              <tr>
                  <td class="wid30 alignTablImg text-center">
                    <img class="znakImg" src="assets/img/znak1/znak_1.5.png"><br><span><b>1.5</b></span>
                  </td>
                  <td>
                    <b class="numStyle">1.5 "Пересечение с трамвайной линией".</b>
                    <p>
                    Устанавливается в н. п. за 50-100 м. до пересечения с трамвайной линией, вне н. п. - за 150-300 м, 
                    может устанавливаться и на ином расстоянии, но при этом расстояние оговаривается таб. 8.1.1 "Расстояние до объекта".
                    <ol>
                     <li>При одновременном праве на движение (когда транспортные средства находятся в равнозначных условиях) водители 
                      трамваев имеют преимущество.</li>
                     <li>Вне перекрестков, где трамвайные пути пересекают путь движения безрельсовых транспортных средств, трамвай имеет 
                      преимущество, кроме случаев выезда из депо.</li>
                     <li>При "разводке" транспортных средств на пересечениях отсутствует понятие "под прикрытием трамваев".</li>
                    </ol>
                    </p>
                  </td>
              </tr>
              <tr>
                  <td class="wid30 alignTablImg text-center">
                    <img class="znakImg" src="assets/img/znak1/znak_1.6.png"><br><span><b>1.6</b></span>
                  </td>
                  <td>
                    <b class="numStyle">1.6 "Пересечение равнозначных дорог".</b>
                    <p>
                    Устанавливается в н. п. за 50-100 м, вне н. п. - за 150-300 м, знак может устанавливаться и на ином 
                    расстоянии, но при этом расстояние оговаривается таб. 8.1.1 "Расстояние до объекта". <br> <br>
                    На таких перекрестках равнозначных дорог обгон запрещен всех видов транспорта всеми транспортыми средствами.
                    </p>
                  </td>
              </tr>
              <tr>
                  <td class="wid30 alignTablImg text-center">
                    <img class="znakImg" src="assets/img/znak1/znak_1.7.png"><br><span><b>1.7</b></span>
                  </td>
                  <td>
                    <b class="numStyle">1.7 "Пересечение с круговым движением".</b>
                    <p>
                    Устанавливается в н. п. за 50-100 м, вне н. п. - за 150-300 м, знак может устанавливаться и на ином 
                    расстоянии, но при этом расстояние оговаривается таб. 8.1.1 "Расстояние до объекта". <br> <br>
                    При подъезде к такому пересечению рекомендуется снизить скорость до безопасных пределов и руководствоваться 
                    правилами проезда перекрестков.
                    </p>
                  </td>
              </tr>
              <tr>
                  <td class="wid30 alignTablImg text-center">
                    <img class="znakImg" src="assets/img/znak1/znak_1.8.png"><br><span><b>1.8</b></span> <br>
                    <img class="znakImg" src="assets/img/znak1/znak_1.8_v.png"><br><span><b>1.8</b></span> <br><span><b>(временный)</b></span>
                  </td>
                  <td>
                    <b class="numStyle">1.8 "Светофорное регулирование".</b>
                    <p>
                    Перекресток, пешеходный переход или участок дороги, движение на котором регулируется светофором. <br> <br>
                    Устанавливается в н. п. за 50-100 м, вне н. п. - за 150-300 м, знак может устанавливаться и на ином расстоянии, 
                    но при этом расстояние оговаривается таб. 8.1.1 "Расстояние до объекта". <br> <br>
                    Знак предупреждает о приближении к перекрестку, пешеходному переходу или участку дороги, движение 
                    на котором регулируется светофором. <br> <br>
                    Если на знаке желтый фон, то знак является временным. <br> <br>
                    В случаях если значения временных дорожных знаков и стационарных дорожных знаков противоречат друг другу, 
                    водители должны руководствоваться временными знаками.
                    </p>
                  </td>
              </tr>
              <tr>
                  <td class="wid30 alignTablImg text-center">
                    <img class="znakImg" src="assets/img/znak1/znak_1.9.png"><br><span><b>1.9</b></span>
                  </td>
                  <td>
                    <b class="numStyle">1.9 "Разводной мост".</b>
                    <p>
                    Разводной мост или паромная переправа. <br> <br>
                    Устанавливается в н. п. за 50-100 м, вне н. п. - за 150-300 м, знак может устанавливаться и на ином расстоянии, 
                    но при этом расстояние оговаривается таб. 8.1.1 "Расстояние до объекта". <br> <br>
                    Знак обязательно повторяется вне населенного пункта, при этом повторный знак устанавливается на 
                    расстоянии не менее 50 м.
                    </p>
                  </td>
              </tr>
              <tr>
                  <td class="wid30 alignTablImg text-center">
                    <img class="znakImg" src="assets/img/znak1/znak_1.10.png"><br><span><b>1.10</b></span>
                  </td>
                  <td>
                    <b class="numStyle">1.10 "Выезд на набережную".</b>
                    <p>
                    Выезд на набережную или берег. <br> <br>
                    Устанавливается в н. п. за 50-100 м, вне н. п. - за 150-300 м, знак может устанавливаться 
                    и на ином расстоянии, но при этом расстояние оговаривается таб. 8.1.1 "Расстояние до объекта". <br> <br>
                    Знак обязательно повторяется вне населенного пункта, при этом повторный знак устанавливается на 
                    расстоянии не менее 50 м.
                    </p>
                  </td>
              </tr>
              <tr>
                  <td class="wid30 alignTablImg text-center">
                    <img class="znakImg" src="assets/img/znak1/znak_1.11.1.png"><br><span><b>1.11.1</b></span>
                  </td>
                  <td>
                    <b class="numStyle">1.11.1 "Опасный поворот (правый)".</b>
                    <p>
                    Закругление дороги малого радиуса или с ограниченной видимостью. <br> <br>
                    Устанавливается в н. п. за 50-100 м, вне н. п. - за 150-300 м, знак может устанавливаться 
                    и на ином расстоянии, но при этом расстояние оговаривается таб. 8.1.1 "Расстояние до объекта". <br> <br>
                    Разница в направлении поворота (направо, налево). Знак информирует только о направлении первого поворота 
                    за знаком.
                    </p>
                  </td>
              </tr>
              <tr>
                  <td class="wid30 alignTablImg text-center">
                    <img class="znakImg" src="assets/img/znak1/znak_1.11.2.png"><br><span><b>1.11.2</b></span>
                  </td>
                  <td>
                    <b class="numStyle">1.11.2 "Опасный поворот (левый)".</b>
                    <p>
                    Закругление дороги малого радиуса или с ограниченной видимостью. <br> <br>
                    Устанавливается в н. п. за 50-100 м, вне н. п. - за 150-300 м, знак может устанавливаться 
                    и на ином расстоянии, но при этом расстояние оговаривается таб. 8.1.1 "Расстояние до объекта". <br> <br>
                    Разница в направлении поворота (направо, налево). Знак информирует только о направлении первого 
                    поворота за знаком.
                    </p>
                  </td>
              </tr>
              <tr>
                  <td class="wid30 alignTablImg text-center">
                    <img class="znakImg" src="assets/img/znak1/znak_1.12.1.png"><br><span><b>1.12.1</b></span>
                  </td>
                  <td>
                    <b class="numStyle">1.12.1 "Опасные повороты (с первым поворотом направо)".</b>
                    <p>
                    Участок дороги с опасными поворотами. <br> <br>
                    Устанавливается в н. п. за 50-100 м, вне н. п. - за 150-300 м, знак может устанавливаться и 
                    на ином расстоянии, но при этом расстояние оговаривается таб. 8.1.1 "Расстояние до объекта". <br> <br>
                    Знак информирует, что впереди ряд (или несколько) поворотов, при этом знак 1.12.1 указывает, 
                    что первый поворот после знака направо.
                    </p>
                  </td>
              </tr>
              <tr>
                  <td class="wid30 alignTablImg text-center">
                    <img class="znakImg" src="assets/img/znak1/znak_1.12.2.png"><br><span><b>1.12.2</b></span>
                  </td>
                  <td>
                    <b class="numStyle">1.12.2 "Опасные повороты (с первым поворотом налево)".</b>
                    <p>
                    Участок дороги с опасными поворотами. <br> <br>
                    Устанавливается в н. п. за 50-100 м, вне н. п. - за 150-300 м, знак может устанавливаться и 
                    на ином расстоянии, но при этом расстояние оговаривается таб. 8.1.1 "Расстояние до объекта". <br> <br>
                    Знак информирует, что впереди ряд (или несколько) поворотов. Знак 1.12.2 указывает, 
                    что первый поворот после знака налево. Направление следующих поворотов неизвестно.
                    </p>
                  </td>
              </tr>
              <tr>
                  <td class="wid30 alignTablImg text-center">
                    <img class="znakImg" src="assets/img/znak1/znak_1.13.png"><br><span><b>1.13</b></span>
                  </td>
                  <td>
                    <b class="numStyle">1.13 "Крутой спуск".</b>
                    <p>
                    Устанавливается в н. п. за 50-100 м, вне н. п. - за 150-300 м, знак может устанавливаться 
                    и на ином расстоянии, но при этом расстояние оговаривается таб. 8.1.1 "Расстояние до объекта". <br> <br>
                    Знаки 1.13, 1.14 могут устанавливаться без таб. 8.1.1 непосредственно перед крутым спуском 
                    или подъемом. <br> <br>
                    Уступить дорогу, при наличии препятствия на уклонах, обозначенных знаками 1.13 и 1.14, должен 
                    водитель ТС, движущегося на спуск.
                    </p>
                  </td>
              </tr>
              <tr>
                  <td class="wid30 alignTablImg text-center">
                    <img class="znakImg" src="assets/img/znak1/znak_1.14.png"><br><span><b>1.14</b></span>
                  </td>
                  <td>
                    <b class="numStyle">1.14 "Крутой подъем".</b>
                    <p>
                    Устанавливается в н. п. за 50-100 м, вне н. п. - за 150-300 м, знак может устанавливаться и на 
                    ином расстоянии, но при этом расстояние оговаривается таб. 8.1.1 "Расстояние до объекта". <br> <br>
                    Знаки 1.13, 1.14 могут устанавливаться без таб. 8.1.1 непосредственно перед крутым спуском или 
                    подъемом. <br> <br>
                    Уступить дорогу при наличии препятствия на уклонах, обозначенных знаками 1.13 и 1.14 , должен 
                    водитель ТС, движущегося на спуск.
                    </p>
                  </td>
              </tr>
              <tr>
                  <td class="wid30 alignTablImg text-center">
                    <img class="znakImg" src="assets/img/znak1/znak_1.15.png"><br><span><b>1.15</b></span><br>
                    <img class="znakImg" src="assets/img/znak1/znak_1.15_v.png"><br><span><b>1.15</b></span><br><span><b>(временный)</b></span>
                  </td>
                  <td>
                    <b class="numStyle">1.15 "Скользкая дорога".</b>
                    <p>
                    Участок дороги с повышенной скользкостью проезжей части. <br><br>
                    Устанавливается в н. п. за 50-100 м, вне н. п. за 150-300 м, знак может 
                    устанавливаться и на ином расстоянии, но при этом расстояние оговаривается таб. 8.1.1 
                    "Расстояние до объекта". <br><br>
                    В целях предотвращения заноса на участках, обозначенных знаком, необходимо двигаться с 
                    пониженной скоростью, без резких ускорений и торможений, плавно вращая рулевое колесо, так как коэффициент сцепления шин с покрытием в силу обстоятельств очень мал.
                    Если на знаке желтый фон, то знак является временным. <br><br>
                    В случаях если значения временных дорожных знаков и стационарных дорожных знаков 
                    противоречат друг другу, водители должны руководствоваться временными знаками.
                    </p>
                  </td>
              </tr>
              <tr>
                  <td class="wid30 alignTablImg text-center">
                    <img class="znakImg" src="assets/img/znak1/znak_1.16.png"><br><span><b>1.16</b></span><br>
                    <img class="znakImg" src="assets/img/znak1/znak_1.16_v.png"><br><span><b>1.16</b></span><br><span><b>(временный)</b></span>
                  </td>
                  <td>
                    <b class="numStyle">1.16 "Неровная дорога".</b>
                    <p>
                    Участок дороги, имеющий неровности на проезжей части (волнистость, выбоины, неплавные 
                    сопряжения с мостами и тому подобное). <br><br>
                    Устанавливается в н. п. за 50-100 м, вне н. п. - за 150-300 м, знак может устанавливаться и 
                    на ином расстоянии, но при этом расстояние оговаривается таб. 8.1.1 "Расстояние до объекта". <br><br>
                    Во избежание потери управления и устойчивости двигаться на таких участках следует с пониженной скоростью.
                    Если на знаке желтый фон, то знак является временным. <br><br>
                    В случаях если значения временных дорожных знаков и стационарных дорожных знаков противоречат друг 
                    другу, водители должны руководствоваться временными знаками.
                    </p>
                  </td>
              </tr>
              <tr>
                  <td class="wid30 alignTablImg text-center">
                    <img class="znakImg" src="assets/img/znak1/znak_1.17.png"><br><span><b>1.17</b></span>
                  </td>
                  <td>
                    <b class="numStyle">1.17 "Искусственная неровность".</b>
                    <p>
                    Участок дороги с искусственной неровностью (неровностями) для принудительного снижения скорости. <br><br>
                    Устанавливается в н. п. за 50-100 м, вне н. п. - за 150-300 м, знак может устанавливаться 
                    и на ином расстоянии, но при этом расстояние оговаривается таб. 8.1.1 "Расстояние до объекта". <br> <br>
                    Такая искусственная неровность водителями называется "лежачий полицейский".
                    </p>
                  </td>
              </tr>
              <tr>
                  <td class="wid30 alignTablImg text-center">
                    <img class="znakImg" src="assets/img/znak1/znak_1.18.png"><br><span><b>1.18</b></span> <br>
                    <img class="znakImg" src="assets/img/znak1/znak_1.18.png"><br><span><b>1.18</b></span><br><span><b>(временный)</b></span>
                  </td>
                  <td>
                    <b class="numStyle">1.18 "Выброс гравия".</b>
                    <p>
                    Участок дороги, на котором возможен выброс гравия, щебня и тому подобного из-под колес 
                    транспортных средств.<br> <br>
                    Устанавливается в н. п. за 50-100 м, вне н. п. - за 150-300 м, знак может устанавливаться 
                    и на ином расстоянии, но при этом расстояние оговаривается таб. 8.1.1
                    "Расстояние до объекта". <br> <br>
                    Следует по возможности увеличить интервал и дистанцию между автомобилями, снизить скорость.<br> <br>
                    Если на знаке желтый фон, то знак является временным.<br> <br>
                    В случаях если значения временных дорожных знаков и стационарных дорожных знаков противоречат 
                    друг другу, водители должны руководствоваться временными знаками.
                    </p>
                  </td>
              </tr>
              <tr>
                  <td class="wid30 alignTablImg text-center">
                    <img class="znakImg" src="assets/img/znak1/znak_1.19.png"><br><span><b>1.19</b></span><br>
                    <img class="znakImg" src="assets/img/znak1/znak_1.19.png"><br><span><b>1.19</b></span><br><span><b>(временный)</b></span>
                  </td>
                  <td>
                    <b class="numStyle">1.19 "Опасная обочина".</b>
                    <p>
                    Участок дороги, на котором съезд на обочину опасен. <br><br>
                    Устанавливается в н. п. за 50-100 м, вне н. п. - за 150-300 м, знак может устанавливаться 
                    и на ином расстоянии, но при этом расстояние оговаривается таб. 8.1.1 "Расстояние до объекта". <br><br>
                    Категорического запрета для съезда на обочину нет. Но если возникла необходимость, 
                    то сделайте это крайне осторожно, а на большегрузных автомобилях лучше этого не делать.<br><br>
                    Если на знаке желтый фон, то знак является временным.<br><br>
                    В случаях если значения временных дорожных знаков и стационарных дорожных знаков 
                    противоречат друг другу, водители должны руководствоваться временными знаками.
                    </p>
                  </td>
              </tr>
              <tr>
                  <td class="wid30 alignTablImg text-center">
                    <img class="znakImg" src="assets/img/znak1/znak_1.20.1.png"><br><span><b>1.20.1</b></span><br>
                    <img class="znakImg" src="assets/img/znak1/znak_1.20.1_v.png"><br><span><b>1.20.1</b></span><br><span><b>(временный)</b></span>
                  </td>
                  <td>
                    <b class="numStyle">1.20.1 "Сужение дороги". (с обеих сторон)</b>
                    <p>
                    Устанавливается в н. п. за 50-100 м, вне н. п. - за 150-300 м, знак может устанавливаться и 
                    на ином расстоянии, но при этом расстояние оговаривается таб. 8.1.1 "Расстояние до объекта".<br><br>
                    Приближаясь к сужению дороги, водитель должен снизить скорость и держаться ближе к правому 
                    краю проезжей части.<br><br>
                    Если на знаке желтый фон, то знак является временным.<br><br>
                    В случаях если значения временных дорожных знаков и стационарных дорожных знаков противоречат 
                    друг другу, водители должны руководствоваться временными знаками.
                    </p>
                  </td>
              </tr>
              <tr>
                  <td class="wid30 alignTablImg text-center">
                    <img class="znakImg" src="assets/img/znak1/znak_1.1.png"><br><span><b>1.1</b></span>
                  </td>
                  <td>
                    <b class="numStyle">1.20.2 "Сужение дороги". (справа)</b>
                    <p>
                  
                    <ol>
                     
                    </ol>
                    </p>
                  </td>
              </tr>
              <tr>
                  <td class="wid30 alignTablImg text-center">
                    <img class="znakImg" src="assets/img/znak1/znak_1.1.png"><br><span><b>1.1</b></span>
                  </td>
                  <td>
                    <b class="numStyle">1.20.3 "Сужение дороги". (слева)</b>
                    <p>
                  
                    <ol>
                     
                    </ol>
                    </p>
                  </td>
              </tr>
              <tr>
                  <td class="wid30 alignTablImg text-center">
                    <img class="znakImg" src="assets/img/znak1/znak_1.1.png"><br><span><b>1.1</b></span>
                  </td>
                  <td>
                    <b class="numStyle">1.21 "Двустороннее движение".</b>
                    <p>
                  
                    <ol>
                     
                    </ol>
                    </p>
                  </td>
              </tr>
              <tr>
                  <td class="wid30 alignTablImg text-center">
                    <img class="znakImg" src="assets/img/znak1/znak_1.1.png"><br><span><b>1.1</b></span>
                  </td>
                  <td>
                    <b class="numStyle">1.1 "Железнодорожный переезд без шлагбаума".</b>
                    <p>
                  
                    <ol>
                     
                    </ol>
                    </p>
                  </td>
              </tr>
              <tr>
                  <td class="wid30 alignTablImg text-center">
                    <img class="znakImg" src="assets/img/znak1/znak_1.1.png"><br><span><b>1.1</b></span>
                  </td>
                  <td>
                    <b class="numStyle">1.1 "Железнодорожный переезд без шлагбаума".</b>
                    <p>
                  
                    <ol>
                     
                    </ol>
                    </p>
                  </td>
              </tr>
              <tr>
                  <td class="wid30 alignTablImg text-center">
                    <img class="znakImg" src="assets/img/znak1/znak_1.1.png"><br><span><b>1.1</b></span>
                  </td>
                  <td>
                    <b class="numStyle">1.1 "Железнодорожный переезд без шлагбаума".</b>
                    <p>
                  
                    <ol>
                     
                    </ol>
                    </p>
                  </td>
              </tr>
              <tr>
                  <td class="wid30 alignTablImg text-center">
                    <img class="znakImg" src="assets/img/znak1/znak_1.1.png"><br><span><b>1.1</b></span>
                  </td>
                  <td>
                    <b class="numStyle">1.1 "Железнодорожный переезд без шлагбаума".</b>
                    <p>
                  
                    <ol>
                     
                    </ol>
                    </p>
                  </td>
              </tr>
              <tr>
                  <td class="wid30 alignTablImg text-center">
                    <img class="znakImg" src="assets/img/znak1/znak_1.1.png"><br><span><b>1.1</b></span>
                  </td>
                  <td>
                    <b class="numStyle">1.1 "Железнодорожный переезд без шлагбаума".</b>
                    <p>
                  
                    <ol>
                     
                    </ol>
                    </p>
                  </td>
              </tr>
              <tr>
                  <td class="wid30 alignTablImg text-center">
                    <img class="znakImg" src="assets/img/znak1/znak_1.1.png"><br><span><b>1.1</b></span>
                  </td>
                  <td>
                    <b class="numStyle">1.1 "Железнодорожный переезд без шлагбаума".</b>
                    <p>
                  
                    <ol>
                     
                    </ol>
                    </p>
                  </td>
              </tr>
              <tr>
                  <td class="wid30 alignTablImg text-center">
                    <img class="znakImg" src="assets/img/znak1/znak_1.1.png"><br><span><b>1.1</b></span>
                  </td>
                  <td>
                    <b class="numStyle">1.1 "Железнодорожный переезд без шлагбаума".</b>
                    <p>
                  
                    <ol>
                     
                    </ol>
                    </p>
                  </td>
              </tr>
              <tr>
                  <td class="wid30 alignTablImg text-center">
                    <img class="znakImg" src="assets/img/znak1/znak_1.1.png"><br><span><b>1.1</b></span>
                  </td>
                  <td>
                    <b class="numStyle">1.1 "Железнодорожный переезд без шлагбаума".</b>
                    <p>
                  
                    <ol>
                     
                    </ol>
                    </p>
                  </td>
              </tr>
              <tr>
                  <td class="wid30 alignTablImg text-center">
                    <img class="znakImg" src="assets/img/znak1/znak_1.1.png"><br><span><b>1.1</b></span>
                  </td>
                  <td>
                    <b class="numStyle">1.1 "Железнодорожный переезд без шлагбаума".</b>
                    <p>
                  
                    <ol>
                     
                    </ol>
                    </p>
                  </td>
              </tr>
              <tr>
                  <td class="wid30 alignTablImg text-center">
                    <img class="znakImg" src="assets/img/znak1/znak_1.1.png"><br><span><b>1.1</b></span>
                  </td>
                  <td>
                    <b class="numStyle">1.1 "Железнодорожный переезд без шлагбаума".</b>
                    <p>
                  
                    <ol>
                     
                    </ol>
                    </p>
                  </td>
              </tr>
              <tr>
                  <td class="wid30 alignTablImg text-center">
                    <img class="znakImg" src="assets/img/znak1/znak_1.1.png"><br><span><b>1.1</b></span>
                  </td>
                  <td>
                    <b class="numStyle">1.1 "Железнодорожный переезд без шлагбаума".</b>
                    <p>
                  
                    <ol>
                     
                    </ol>
                    </p>
                  </td>
              </tr>
              <tr>
                  <td class="wid30 alignTablImg text-center">
                    <img class="znakImg" src="assets/img/znak1/znak_1.1.png"><br><span><b>1.1</b></span>
                  </td>
                  <td>
                    <b class="numStyle">1.1 "Железнодорожный переезд без шлагбаума".</b>
                    <p>
                  
                    <ol>
                     
                    </ol>
                    </p>
                  </td>
              </tr>
              <tr>
                  <td class="wid30 alignTablImg text-center">
                    <img class="znakImg" src="assets/img/znak1/znak_1.1.png"><br><span><b>1.1</b></span>
                  </td>
                  <td>
                    <b class="numStyle">1.1 "Железнодорожный переезд без шлагбаума".</b>
                    <p>
                  
                    <ol>
                     
                    </ol>
                    </p>
                  </td>
              </tr>
              <tr>
                  <td class="wid30 alignTablImg text-center">
                    <img class="znakImg" src="assets/img/znak1/znak_1.1.png"><br><span><b>1.1</b></span>
                  </td>
                  <td>
                    <b class="numStyle">1.1 "Железнодорожный переезд без шлагбаума".</b>
                    <p>
                  
                    <ol>
                     
                    </ol>
                    </p>
                  </td>
              </tr>
              <tr>
                  <td class="wid30 alignTablImg text-center">
                    <img class="znakImg" src="assets/img/znak1/znak_1.1.png"><br><span><b>1.1</b></span>
                  </td>
                  <td>
                    <b class="numStyle">1.1 "Железнодорожный переезд без шлагбаума".</b>
                    <p>
                  
                    <ol>
                     
                    </ol>
                    </p>
                  </td>
              </tr>
               <tr>
                  <td class="wid30 alignTablImg text-center">
                    <img class="znakImg" src="assets/img/znak1/znak_1.1.png"><br><span><b>1.1</b></span>
                  </td>
                  <td>
                    <b class="numStyle">1.1 "Железнодорожный переезд без шлагбаума".</b>
                    <p>
                  
                    <ol>
                     
                    </ol>
                    </p>
                  </td>
              </tr>
              </table>
            </div>
          </div> 
        </div>
        <div class="col-lg-1">
          <div class="list-group content-border">
            <a class="list-group-item list-group-item-action nv" href="znak2.php">вперед</a>
          </div>
        </div>
        <div class="col-lg-1">
          <div class="list-group content-border vnMargin">
            <a class="list-group-item list-group-item-action nv" href="pdd26.php">назад</a>
          </div>
        </div>
        <div class="col-lg-4">
        </div>
        <div class="col-lg-2">
          <div class="list-group content-border vnMargin">
            <a class="list-group-item list-group-item-action nv" href="#top">наверх</a>
          </div>
        </div>
        <div class="col-lg-4">
        </div>
        <div class="col-lg-1">
          <div class="list-group content-border vnMargin">
            <a class="list-group-item list-group-item-action nv" href="znak2.php">вперед</a>
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