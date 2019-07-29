<?php
header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Zabor</title>
    <meta charset="utf-8"/>
    <meta name="description" content=""/>
	<meta name="keywords" content=""/>
    <link href='styles/reset.css' rel='stylesheet' />
    <link href='styles/basic.css' rel='stylesheet' />
    <link href='styles/index.css' rel='stylesheet' />   
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
    <script src="js/index.js"></script>
    <script src="js/slide.js"></script>  
</head>
<body>
<div id="noDisplay"><img src="images/head_metal.png" alt=""/></div>
    <div id="basicWrap">
            <?php include('moduls/header.php'); // модуль шапка ?>
            <div id="content">
                    <aside>
                            <div class="baner">
                                    <img src="images/ban.png" width="205" height="280" alt="" />
                            </div>
                            <button class="but1">НОВОСТИ КОМПАНИИ</button>
                            <table class="blockNews">
                                    <tr class="dateNewsBl"><td>12.06.2013</td></tr>
                                    <tr class="titleNewsBl"><td><a href="#">Новости нашей компании</a></td></tr>
                                    <tr class="textNewsBl"><td>В разделе "Поддержка добавлен электроный каталог торогового оборудования..."</td></tr>
                            </table>
                            <table class="blockNews">
                                    <tr class="dateNewsBl"><td>12.06.2013</td></tr>
                                    <tr class="titleNewsBl"><td><a href="#">Новости нашей компании</a></td></tr>
                                    <tr class="textNewsBl"><td>В разделе "Поддержка добавлен электроный каталог торогового оборудования..."</td></tr>
                            </table>
                            <table class="blockNews">
                                    <tr class="dateNewsBl"><td>12.06.2013</td></tr>
                                    <tr class="titleNewsBl"><td><a href="#">Новости нашей компании</a></td></tr>
                                    <tr class="textNewsBl"><td>В разделе "Поддержка добавлен электроный каталог торогового оборудования..."</td></tr>
                            </table>
                            <div class="liniya_1"></div>
                            <button class="but2">ВСЕ НОВОСТИ</button>
                            <div class="clear"></div>
                            <button class="but1">ПОЛЕЗНАЯ ИНФОРМАЦИЯ</button>
                            <ul id="listPoleznaInfo">
                                    <li><a href="#">Заборы - наследие из глубины веков</a></li>
                                    <li><a href="#">Оригенальные решения в строительстве заборов: дерево и камень</a></li>
                                    <li><a href="#">Новинка - заборы под дерево из профнастила</a></li>
                            </ul>
                            <div class="liniya_1"></div>
                            <button class="but2 but2-2">ВСЕ СТАТЬИ</button>
                            <div class="clear"></div>
                    </aside>
                    <div id="contentCentr">
                            <div id="slideWrap">
                                <div id="imgSlide">
                                    <img class="sl_1" src="images/slide/slide_1.png" alt="" />
                                    <img class="sl_2" src="images/slide/slide_2.png" alt="" />
                                    <img class="sl_3" src="images/slide/slide_3.jpg" alt="" />
                                </div>
                            <ul id="butNavSlide">
                                    <li id="sl_1" class="thisButHead"></li>
                                    <li id="sl_2"></li>
                                    <li id="sl_3"></li>
                            </ul>
                            </div>
                    <div id="centrConent">
                            <h1>ЗНАТНЫЕ ЗАБОРЫ ОТ НАШЕЙ КОМПАНИИ</h1>
                            <div class="polosaH"></div>
                            <div class="clear"></div>
                                    <div id="CentrBloki">
                                            <table><tr>
                                                    <td class="CentrBlokiImg"><img src="images/content/metal-zabor.png" width="65" alt="" /></td>
                                                    <td class="CentrBlokiTitle">ЗАБОРЫ</td></tr>
                                                <tr><td colspan="2" class="CentrBlokiList"><ul>
                                                                    <li><a href="zaboru.php">заборы из профнастила</a></li>
                                                                    <li><a href="">заборы из сетки и рабицы</a></li>
                                                                    <li><a href="">деревянные заборы</a></li></ul></td></tr>
                                            </table>
                                            <table><tr>
                                                    <td class="CentrBlokiImg"><img src="images/content/metal-vorota.png" width="65" alt="" /></td>
                                                    <td class="CentrBlokiTitle">ВОРОТА И КАЛИТКИ</td></tr>
                                                <tr><td colspan="2" class="CentrBlokiList"><ul>
                                                                    <li><a href="">калитки для забора из профнастила</a></li>
                                                                    <li><a href="">калитки для забора из сетки рабицы</a></li>
                                                                    <li><a href="">калитки для деревянных заборов</a></li></ul></td></tr>
                                            </table>
                                            <table><tr>
                                                    <td class="CentrBlokiImg"><img src="images/content/stolbu.png" width="65" alt="" /></td>
                                                    <td class="CentrBlokiTitle" style="left: -5px;">СТОЛБЫ ДЛЯ ЗАБОРОВ</td></tr>
                                                <tr><td colspan="2" class="CentrBlokiList"><ul>
                                                                    <li><a href="">кирпичные столбы</a></li>
                                                                    <li><a href="">железные столбы</a></li></ul></td></tr>
                                            </table>
                                            <div class="clear"></div>
                                            <table><tr>
                                                    <td class="CentrBlokiImg"><img src="images/content/material.png" width="65" alt="" /></td>
                                                    <td class="CentrBlokiTitle">МАТЕРИАЛЫ ДЛЯ ЗАБОРОВ</td></tr>
                                                <tr><td colspan="2" class="CentrBlokiList"><ul style="position: relative;top: -19px">
                                                                    <li><a href="">профилированный лист</a></li>
                                                                    <li><a href="">трубы круглые</a></li>
                                                                    <li><a href="">профильные трубы</a></li></ul></td></tr>
                                            </table>
                                            <table style="margin-top: -5px;"><tr>
                                                    <td class="CentrBlokiImg"><img src="images/content/fundament.png" width="65" alt="" /></td>
                                                    <td class="CentrBlokiTitle">ФУНДАМЕНТ</td></tr>
                                                <tr><td colspan="2" class="CentrBlokiList"><ul>
                                                                    <li><a href="">ленточный фундамент</a></li>
                                                                    <li><a href="">винтовые сваи</a></li></ul></td></tr>
                                            </table>
                                            <table style="margin-top: 2px;"><tr>
                                                    <td class="CentrBlokiImg"><img src="images/content/butovki.png" width="65" alt="" /></td>
                                                    <td class="CentrBlokiTitle">БЫТОВКИ ДЛЯ ДАЧИ</td></tr>
                                                <tr><td colspan="2" class="CentrBlokiList"><ul>
                                                                    <li><a href="">хозблоки</a></li>
                                                                    <li><a href="">деревянные бытовки</a></li>
                                                                    <li><a href="">металлические блок-контейнеры</a></li></ul></td></tr>
                                            </table>
                                            <div class="clear"></div>
                                            <table><tr>
                                                    <td class="CentrBlokiImg"><img src="images/content/krovla.png" width="65" alt="" /></td>
                                                    <td class="CentrBlokiTitle">КРОВЛЯ</td></tr>
                                                <tr><td colspan="2" class="CentrBlokiList"><ul>
                                                                    <li><a href="">Профнастил</a></li></ul></td></tr>
                                            </table>
                                            <table><tr>
                                                    <td class="CentrBlokiImg"><img src="images/content/navesu.png" width="65" alt="" /></td>
                                                    <td class="CentrBlokiTitle">НАВЕСЫ</td></tr>
                                                <tr><td colspan="2" class="CentrBlokiList"><ul>
                                                                    <li><a href="">Из поликарбоната</a></li></ul></td></tr>
                                            </table>
                                            <table><tr>
                                                    <td class="CentrBlokiImg"><img src="images/content/teplicu.png" width="65" alt="" /></td>
                                                    <td class="CentrBlokiTitle">ТЕПЛИЦЫ</td></tr>
                                                <tr><td colspan="2" class="CentrBlokiList"><ul>
                                                                    <li><a href="">Из поликарбоната</a></li></ul></td></tr>
                                            </table>
                                            <div class="clear"></div>
                                    </div>
                    <h2>НЕСКОЛЬКО ПРИЧИН ЗАКАЗАТЬ ЗАБОР ИМЕННО У НАС</h2>
                    <div id="prichinu">
                    <div class="prichinuBlock">
                            <img src="images/icon/specualistu.png" alt="" />
                            <p>Квалифицированные специалисты</p>
                    </div>
                    <div class="prichinuBlock">
                            <img src="images/icon/proizvodstvo.png" alt="" />
                            <p>Собственное производство</p>
                    </div>
                    <div class="prichinuBlock">
                            <img src="images/icon/sherif.png" alt="" />
                            <p>Гарантия<br /> 36 месяцев</p>
                    </div>
                    <div class="prichinuBlock">
                            <img src="images/icon/podarok.png" alt="" />
                            <p>Гибкая<br /> система скидок</p>
                    </div>
                    <div class="prichinuBlock">
                            <img src="images/icon/zameru.png" alt="" />
                            <p>Бесплатный<br /> выезд замерщика</p>
                    </div>
                    </div>
                    <p class="textPrichinu">
                            Универсального ответа на вопрос, каким должен быть ваш забор, у нас нет. Но вы можете быть уверены в 
                            том, что каждое произведенное и установленное нашими специалистами ограждение с честью справляется 
                            со своими основными функциями и выглядит при этом весьма достойно. Компания «ЗаводЗаборов» делает 
                            вам предложение, от которого невозможно отказаться. Это качественные, надежные, долговечные, красивые 
                            и, что немаловажно, доступные каждому конструкции – вашему участку они будут к лицу, а вам – по душе и 
                            карману.
                    </p>
                    <h4>Выбор материала для строительства забора</h4>
                    <p class="textPrichinu">
                            Дача, садовый участок, загородный коттедж, усадьба, бизнес-центр, промышленное здание в черте или за 
                            чертой города – каждому из них требуется качественное, надежное, долговечное и презентабельное ограждение.
                    </p>
                    </div>
                    </div>
                    <div class="clear"></div>
            </div>
            <?php include('moduls/footer.php'); // модуль футер ?>
    </div>
</body>
</html>