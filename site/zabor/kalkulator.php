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
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
    <script src="js/index.js"></script> 
    <script src="js/leftBlockModul.js"></script>
</head>
<body>
    <div id="basicWrap">
            <?php include('moduls/header.php'); ?>
            <div id="content">
                  <aside>
                        <?php include('moduls/navProdLB.php'); ?>
                        <div class="clear"></div>
                  </aside>  
                  <div id="contentCentr">
                        <div class="liniya_1_Content">
                                <ul>
                                    <li><a href="index.php">Главная&nbsp; &gt;</a></li>
                                    <li><a href="kalkulator.php">Калькулятор</a></li>
                                </ul>
                        </div>
                  </div>    
            </div>
            <div class="clear"></div>
            <?php include('moduls/footer.php'); ?>
    </div>
</body>
</html>