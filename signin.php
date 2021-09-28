<?php
    session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Стажировка</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="script.js"></script>

    <link rel="stylesheet" href="./styles.css">
</head>

<body link="white" vlink="#cecece" alink="#ff0000" bgcolor="white" text-decoration="none">
    <div class="hidden">
        <div class="page">
            <style>
                a {
                    text-decoration: none;
                }
            </style>

            <header class="header">
                <nav class="navigation">
                    <ul class="header-links">
                        <li class="header-links__item"><a href="#" class="header-link">О компании</a></li>
                        <li class="header-links__item"><a href="#" class="header-link">команда</a></li>
                        <li class="header-links__item"><a href="#" class="header-link">клиенты</a></li>
                        <li class="header-links__item"><a href="#" class="header-link">Наши преимущества</a></li>
                        <li class="header-links__item"><a href="#" class="header-link">Вакансии</a></li>
                        <li class="header-links__item"><a href="#" class="header-link">Контанты</a></li>
                        <li class="header-links__item"><a href="tel:88112702080" class="header-link">Псков +7(8112)70 20
                                80</a></li>
                        <li class="header-links__item"><a href="tel:88129821912" class="header-link">Санкт-Петербург +7
                                (812) 982 19 12</a></li>
                                
                                <li class="header-links__item"><a href="reg.php" action="reg.php" class="" role="button">Зарегестрироваться
								</a></li>
								
                    </ul>
                </nav>
            </header>
                <div class="page">


                <div class="palase">
                <form action="sign.php" method="POST">
                    <input type="text" name="login" placeholder="введите login" class="name" required /><br>
                    <input type="password" name="pass" placeholder="введите пароль" class="name" required /> <br>
                    <button type="submit">Войти</button>
                    <?php
                    if ($_SESSION['messa']) {
                        echo  '<p class="msg">' . $_SESSION['messa'] . '</p>';
                    }
                    unset($_SESSION['messa']);
                    ?>



                </form>

                <footer class="footer1">
                    <div class="footer-bg">
                        <div class="seti">
                            <div class="logo">
                                <a href="#" class="end-img-footer"><img src="./img/endesign.png" alt="#" class="end-img-footer"></a>
                            </div>
                            <div class="footer-svaz">
                                <div class="numbers">
                                    <p>Псков <a href="#">+7 (8112) 70 20 80</a></p>
                                    <p>Санкт-Петербург <a href="#">+7 (812) 982-19-12</a></p>
                                </div>

                                <div class="soc-seti">
                                    <a href="#" class="soc1"><img src="./img/vk.png" class="soc2"></a>
                                    <a href="#" class="soc1"><img src="./img/inst.png" class="soc2"></a>
                                    <a href="#" class="soc1"><img src="./img/face.png" class="soc2"></a>
                                    <a href="#" class="soc1"><img src="./img/sap.png" class="soc2"></a>
                                    <a href="#" class="soc1"><img src="./img/viber.png" class="soc2"></a>
                                </div>
                            </div>

                        </div>
                        <div class="inf">
                            <div class="inf-line">
                                <nav class="inf-row" aria-label="Меню">
                                    <ul id="menu-footer" class="menu-footer">
                                        <li id="menu-footer" class="menu-footer">
                                            <a href="#" aria-current="page" class="menu-link">Главная</a>
                                            <ul class="mini-menu">
                                                <li id="mini-footer-minu" class="mini-footer-menu">
                                                    <a href="#" class="menu-link">разработка сайтов</a>
                                                </li>
                                                <li id="mini-footer-minu" class="mini-footer-menu">
                                                    <a href="#" class="menu-link">мобильные приложения</a>
                                                </li>
                                                <li id="mini-footer-minu" class="mini-footer-menu">
                                                    <a href="#" class="menu-link">web разработка</a>
                                                </li>
                                                <li id="mini-footer-minu" class="mini-footer-menu">
                                                    <a href="#" class="menu-link">продвижение</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li id="menu-footer" class="menu-foote-list">
                                            <a href="#" class="menu-link">О нас</a>
                                        </li>
                                        <li id="menu-footer" class="menu-foote-list">
                                            <a href="#" class="menu-link">Контанты</a>
                                        </li>
                                        <li id="menu-footer" class="menu-foote-list">
                                            <a href="#" class="menu-link">Порфотлио</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </footer>
        </div>
</body>

</html>