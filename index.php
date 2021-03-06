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
						<?php
						if (!$_SESSION['log']) {
						?>
							<a href="signin.php" action="sigin.php" class="" role="button">Войти</a>
							<a href="reg.php" action="reg.php" class="" role="button">Зарегестрироваться
							</a>
						<?php
						}
						?>

						<?php
						if ($_SESSION['log']) {
						?>
							<a href="" action="" class="" role="button"><?= $_SESSION['log']['login'] ?></a>
							<a href="vihod.php" action="vihod.php" class="" role="button">Выйти
							</a>
						<?php
						}
						?>
					</ul>
				</nav>
				<div class="header-flex-wrapper">
					<div class="elementor">
						<nav class="second-navigation">
							<ul class="second-header-links">
								<div class="pospos">
									<div class="pos">
										<div class="pic">
											<a href="#" class="end-img"><img src="./img/endesign.png" alt="#" class="end-img"></a>
										</div>

										<div class="pic2">
											<li class="header-links__item"><a href="#" class="header-link">ГЛАВНАЯ</a>
											</li>
											<li class="header-links__item"><a href="#" class="header-link">РАЗРАБОТКА
													САЙТОВ</a></li>
											<li class="header-links__item"><a href="#" class="header-link">МОБИЛЬНЫЕ
													ПРИЛОЖЕНИЯ</a></li>
											<li class="header-links__item"><a href="#" class="header-link">WEB
													РАЗРАБОТКА</a></li>
											<li class="header-links__item"><a href="#" class="header-link">ПРОДВИЖЕНИЕ</a></li>
											<li class="header-links__item"><a href="#" class="header-link">ПОРТФОЛИО</a>
											</li>
										</div>
									</div>
									<div class="part">
										<div class="partpart">
											<p> <a class="header-link"> Развиваем цифровые продукты и системы продвижения.
												</a>
												<br>
												<a class="header-link">WEB студия </a>
											<div>
												<br><a href="#" class="porfol" role="button">Перейти в портфолио</a>
											</div>
										</div>
									</div>
								</div>

					</div>
					</ul>


				</div>

				</nav>
		</div>
	</div>
	</header>
	<div class="web">
		<div class="hh">
			<h1>Вэб студия EDESIGH</h1>
		</div>
		<div class="web-text">
			<p>Наша задача не просто создавать сайты. Мы создаем эффективные бизнес-представительства компаний с
				уникальным дизайном в сети интернет, которые помогают развивать бизнес, увеличивать продажи, повышать
				узнаваемость продукции</p>
		</div>
	</div>

	<div class="uslugi">
		<h2>Наши уcлуги</h2>
	</div>
	<div class="brown">
		<div class="brown1">
			<img src="https://endesign.ru/wp-content/uploads/2020/10/domain-registration-1.png" />
			<a href="#" class="bom">СОЗДАНИЕ САЙТОВ</a>
			<img src="https://endesign.ru/wp-content/uploads/2020/10/mobile-phone.png" />
			<a href="#" class="bom">МОБИЛЬНЫЕ ПРИЛОЖЕНИЯ</a>
			<img src="https://endesign.ru/wp-content/uploads/2020/10/computer.png" />
			<a href="#" class="bom">ПРОДВИЖЕНИЕ</a>
			<img src="https://endesign.ru/wp-content/uploads/2020/10/coding.png" />
			<a href="#" class="bom">WEB РАЗРАБОТКА</a>
		</div>
	</div>

	<div class="podrob">
		<div class="mujik_s_text">

			<div class="mujik">
				<img src="https://endesign.ru/wp-content/uploads/2020/10/picture.jpg" alt="">
			</div>

		</div>

		<div class="mujik_text">
			<p class="aq">Наша компания занимается созданием сайтов в Пскове.</p><br>

			<p class="aq">На текущий момент сайт стал одной из ключевых вещей,
				которые необходимы каждой компании.</p><br>

			<p class="aq">Задачи, которые компании отводят своему сайту, различные:
				информационная визитка, канал продаж, промо-акция. При этом
				диапазон стоимости сайтов на рынке весьма значительный.
				Мы считаем, что сайты не должны необоснованно дорого стоить, ведь
				сайт – это программный продукт, который имеет определенные трудозатраты
				на создание и настройку.</p><br>

			<p class="aq">Своим клиентам мы предлагаем ряд основных продуктов по созданию сайтов
				в Пскове.</p>
			<div>
				<br><a href="#" class="knop" role="button">Подробнее</a>
			</div>
		</div>
	</div>

	<div class="preim">
		<div class="bg-preim">
			<h2 class="qw">Наши преимущества</h2>
		</div>
		<div class="text-blocks">

			<div class="first-blocks">
				<div class="block">
					<h2 class="qw2">Широкий спектр услуг<h2>
							<div class="polosa">
								<span class="tsvet">
									<hr color="#E06618" noshade align="left" size="2px" class="solid">
								</span>
							</div>

							<div class="text">
								<p class="header-link">Наша компания может провести Ваш проект
									от разработки сайта до его продвижения.</p>
							</div>
				</div>
			</div>

			<div class="first-blocks">
				<div class="block">
					<h2 class="qw2">Гибкая ценовая политика<h2>
							<div class="polosa">
								<span class="tsvet">
									<hr color="#E06618" noshade align="left" size="2px" class="solid">
								</span>
							</div>

							<div class="text">
								<p class="header-link">Для полного расчета стоимости услуг,
									Вам необходимо подробно заполнить заявку.</p>
							</div>
				</div>
			</div>

			<div class="first-blocks">
				<div class="block">
					<h2 class="qw2">Большая клиентская аудитория<h2>
							<div class="polosa">
								<span class="tsvet">
									<hr color="#E06618" noshade align="left" size="2px" class="solid">
								</span>
							</div>

							<div class="text">
								<p class="header-link">Компания enDESIGN уже много лет
									специализируется на создании сайтов, продвижении сайтов.</p>
							</div>
				</div>
			</div>
		</div>

		<div class="text-blocks1">

			<div class="first-blocks1">
				<div class="block3">
					<h2 class="qw2">Многолетний опыт<h2>
							<div class="polosa">
								<span class="tsvet">
									<hr color="#E06618" noshade align="left" size="2px" class="solid">
								</span>
							</div>

							<div class="text">
								<p class="header-link">Наша компания может провести Ваш проект
									от разработки сайта до его продвижения.</p>
							</div>
				</div>
			</div>

			<div class="first-blocks1">
				<div class="block1">
					<h2 class="qw2">Квалифицированный коллектив<h2>
							<div class="polosa">
								<span class="tsvet">
									<hr color="#E06618" noshade align="left" size="2px" class="solid">
								</span>
							</div>

							<div class="text">
								<p class="header-link">Специалисты компании Endesign имеют многолетний
									опыт работы в сфере IT, Наш опыт и знания – залог качественной работы</p>
							</div>
				</div>
			</div>
			<div class="first-blocks1">
				<div class="block2">
					<h2 class="qw2">Разные платформы<h2>
							<div class="polosa">
								<span class="tsvet">
									<hr color="#E06618" noshade align="left" size="2px" class="solid">
								</span>
							</div>

							<div class="text">
								<p class="header-link">Мы предлагаем разработку сайтов на разных
									платформах: Bitrix, Joomla, WordPress, Drupal и другие.</p>
							</div>
				</div>
			</div>
		</div>
	</div>


	<!-- jQuery library (served from Google) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<!-- bxSlider Javascript file -->
	<script src="./copy.js"></script>


	<div id="block-for-slider">
		<div id="viewport">
			<ul id="slidewrapper">
				<li class="slide"><img src="./img/2.jpg"></li>
				<li class="slide"><img src="./img/4.png"></li>
				<li class="slide"><img src="./img/4.png"></li>
				<li class="slide"><img src="https://i.pinimg.com/474x/e1/58/17/e15817265cb37232ab51f68e452e5a91.jpg">
				</li>
			</ul>

			<div id="prev-next-btns">
				<div id="prev-btn"></div>
				<div id="next-btn"></div>
			</div>

			<ul id="nav-btns">
				<li class="slide-nav-btn"></li>
				<li class="slide-nav-btn"></li>
				<li class="slide-nav-btn"></li>
				<li class="slide-nav-btn"></li>
			</ul>
		</div>
	</div>

	<div class="primeri">
		<div class="zag">
			<h2 class="qw21"> Примеры недавних работ</h2>
		</div>

		<div class="zag">
			<h3 noshade align="center" class="qw1"> ЗДЕСЬ ВЫ МОЖЕТЕ ОЗНАКОМИТЬСЯ С НАШИМИ РЕАЛИЗОВАННЫМИ РАБОТАМИ</h2>
		</div>

		<div class="form">
			<div class="mini-form">
				<div class="img421">
					<a href=""> <img src="./img/1.jpg" class="img1"></a>
					<div class="bot_text">
						<h5 class="qw5">Студии красоты Екатерины Надобниковой</h5>
					</div>
				</div>

			</div>

			<div class="mini-form">
				<div class="img421">
					<a href=""><img class="img1" src="https://endesign.ru/wp-content/uploads/2020/10/zastavka.jpg"></a>

					<div class="bot_text">
						<h5 class="qw5">ЮТТА STARS</h5>
					</div>
				</div>
			</div>
			<div class="mini-form">
				<div class="img421">
					<a href=""><img class="img1" src="https://endesign.ru/wp-content/uploads/2020/10/logotip-plesca.png"></a>

					<div class="bot_text">
						<h5 class="qw5">Plesca</h5>
					</div>
				</div>
			</div>
		</div>
		<div class="form">
			<div class="mini-form">
				<div class="img421">
					<a href=""><img class="img1" src="https://endesign.ru/wp-content/uploads/2020/10/aelita_logo.png"></a>

					<div class="bot_text">
						<h5 class="qw5">Plesca</h5>
					</div>
				</div>
			</div>

			<div class="mini-form">
				<div class="img421">
					<a href=""><img class="img1" src="https://endesign.ru/wp-content/uploads/2020/10/resurs-finans.jpg"></a>

					<div class="bot_text">
						<h5 class="qw5">Plesca</h5>
					</div>
				</div>
			</div>

			<div class="mini-form">
				<div class="img421">
					<a href=""><img class="img1" src="https://endesign.ru/wp-content/uploads/2020/10/qwe.png"></a>

					<div class="bot_text">
						<h5 class="qw5">Plesca</h5>
					</div>
				</div>
			</div>
		</div>

		<div class="form">
			<div class="mini-form">
				<div class="img421">
					<a href=""><img class="img1" src="https://endesign.ru/wp-content/uploads/2020/10/nd.jpg"></a>

					<div class="bot_text">
						<h5 class="qw5">Plesca</h5>
					</div>
				</div>
			</div>

			<div class="mini-form">
				<div class="img421">
					<a href=""><img class="img1" src="https://endesign.ru/wp-content/uploads/2020/10/fon-1.png"></a>

					<div class="bot_text">
						<h5 class="qw5">Plesca</h5>
						S
					</div>
				</div>
			</div>

			<div class="mini-form">
				<div class="img421">
					<a href=""><img class="img1" src="https://endesign.ru/wp-content/uploads/2020/10/kartochka.png"></a>

					<div class="bot_text">
						<h5 class="qw5">Plesca</h5>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="bg-form">
		<form action="php.php" method="post" name="form">
			<div class="formform">
				<div class="form__row">
					<div class="form__field">
						<label> Имя <br><span class="form1">
								<input type="text" class="label1" name="name" value="" class="form-imput" aria-required="true" aria-invalid="false" required></span> </label>
					</div>
					<div class="form__field">
						<label> Email <br><span class="form1">
								<input type="email" class="label1" name="email" value="" class="form-imput" aria-required="true" aria-invalid="false" required></span> </label>
					</div>
					<p></p>
				</div>
				<div class="form__row">
					<div class="form__field">
						<label> Телефон <br><span class="form1">
								<input type="tel" class="label1" name="tel" value="" class="form-imput" aria-required="true" aria-invalid="false"></span> </label>
					</div>
					<div class="form__field">
						<label> Пол <span class="vibor-pola">
								<select class="option" aria-required="true" aria-invalid="false" name="pol" required>
									<br>
									<option value="Мужской"> Мужской </option>
									<option value="Женский"> Женский </option>
								</select></span>
					</div>
					<p></p>
				</div>
				<div class="form__row">
					<div class="form__field">
						<label> Какая услуга вас интересует <span class="vibor-pola" name="usl">
								<select class="option-ulugi" aria-required="true" aria-invalid="false">
									<br>
									<option value="РАЗРАБОТКА САЙТОВ">РАЗРАБОТКА САЙТОВ</option>
									<option value="МОБИЛЬНЫЕ ПРИЛОЖЕНИЯ">МОБИЛЬНЫЕ ПРИЛОЖЕНИЯ</option>
									<option value="WEB РАЗРАБОТКА">WEB РАЗРАБОТКА</option>
									<option value="ПРОДВИЖЕНИЕ">ПРОДВИЖЕНИЕ</option>
								</select></span>
					</div>
					<p></p><br>
				</div>
				<div class="form__row">
					<div class="form__field">
						<label> Комментарий <br> <span class="textarea">
								<textarea name="textarea" cols="51" rows="5" class="form-imput" aria-required="true" aria-invalid="false"></textarea>
						</label>
					</div>
					<p></p>
				</div>
				<div class="form__row">
					<div class="form__field">
						<div class="submit">
							<input type="submit" value="Отправить" class="submit1" />
							</label>
						</div>
					</div>
					<p></p>
				</div>
			</div>
		</form>
	</div>

	<footer class="footer">
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