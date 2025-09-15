<?php

require_once 'connect.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>EUROMetrs</title>
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta name="keywords" content=">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">

	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/style.css"/>
	<link rel="stylesheet" href="css/reset.css">
	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        a {
            text-decoration: none;
        }
    </style>
</head>
<body>
    <section class="first__section" style="background: url(./img/page-top-bg.jpg) no-repeat center; background-size: cover; height: 350px;">
		<header class="header">
			<div class="header-top">
			<div class="header__container__first">
				<div class="header__top__left">
					<div class="top__info">
						<i class="site__icons phone__icons"></i>8 (845) 298-86-48
					</div>
					<div class="top__info">
						<i class="site__icons email__icons"></i>eurometers64@gmail.com	
					</div>
				</div>
				<div class="header__top__right">
					<div class="top__social">
						<a href="#"><i class="site__icons twitter__icons"></i></a>
						<a href="#"><i class="site__icons instagram__icons"></i></a>
					</div>
					<div class="user-panel">
						
					</div>
				</div>
			</div>
			</div>
			<div class="header-bottom">
				<div class="header__container__second">
					<a href="index.html" class="logo"><img src="./img/logo.png" alt="" class="logo__img"></a>
					<ul class="menu">
						<a href="index.html"><li class="menu__item">Главная</li></a>
						<a href="featured__listings.html"><li class="menu__item">Каталог</li></a>
						<a href="about__us.html"><li class="menu__item">О нас</li></a>
						<a href="pages_Serbia.html"><li class="menu__item">Информация</li></a>
						<a href="blog.html"><li class="menu__item">Новости</li></a>
						<a href="contact.html"><li class="menu__item">Контакты</li></a>
					</ul>
					<div class="close__menu__button" onclick="open__on__menu()"><i class="site__icons bur__icons"></i></div>
					<div class="menu__container">
						<ul class="menu__list" style="height: 0px !important;">
							<a href="index.html"><li class="menu__list__item">Главная</li></a>
							<a href="featured__listings.html"><li class="menu__list__item">Каталог</li></a>
							<a href="about__us.html"><li class="menu__list__item">О нас</li></a>
							<a href="pages_Serbia.html"><li class="menu__list__item">Информация</li></a>
							<a href="blog.html"><li class="menu__list__item">Новости</li></a>
							<a href="contact.html"><li class="menu__list__item">Контакты</li></a>
						  </ul>
					  </div>
				</div>
			</div>
		</header>
		<div class="information__first__section__other__pages">
			<div class="container__text__first__section">
				<h1 class="title__first__section">О нас</h1>
			</div>
		</div>
		</section>
		<section class="second__section__about">
			<div class="site__navigation">
				<a href="index.html" class="site__navigation__item__first"><i class="site__icons home__icons"></i>Главная</a>
				<div class="site__navigation__item__second"><i class="site__icons angle__right__icons"></i>О нас</div>
			</div>
			<div class="about__and__quality__container">
				<img src="./img/about.jpg" alt="" class="about__image__first__section">
				<div class="second__section__contant">
				<div class="about__us__content">
					<h2 class="about__us__title">О нас</h2>
					<p class="about__us__text">Еврометры предоставляет услуги по продаже недвижимости за рубежом. Вы можете преобрести недвижимость в доступных на сегодняшний день странах. В нашем каталоге есть как и обычные квартиры, так и коттеджи. Помимо продажи, у нас есть жилье в аренду.</p>
				</div>
				<div class="our__quality__content">
					<h2 class="our__quality__title__second__section">Наше качество</h2>
					<p class="our__quality__text">ЕВРОМЕТРЫ имеет высококвалифицированных специалистов, которые обладают глубокими знаниями в области продаж недвижимости за границей.</p>
						<ul class="our__quality__list">
				
						</ul>
					</div>
				</div>
			</div>
		</section>
		<section class="third__section__about">
			<div class="our__quality__title__and__text">
				<h2 class="our__quality__title__third__section">Наши сотрудники</h2>
			</div>
			<div class="grid__agent__container">
				<div class="grid__agent__item">
					<div class="agent__avatar">
						<img src="./img/team/1.jpg" alt="" class="avatar__image">
					</div>
					<div class="agent__information">
						<div class="name__agent">Боярова Любовь</div>
						<div class="profession__agent">Директор</div>
						<div class="personal__information">
							<div class="agent__phone"><i class="site__icons phone__icons agent__phone__icons"></i>8 (845) 298-86-48</div>
							<div class="agent__email"><i class="site__icons email__icons email__agent__icons"></i>eurometer64@gmail.com</div>
						</div>
					</div>
				</div>
				<div class="grid__agent__item">
					<div class="agent__avatar">
						<img src="./img/team/2.jpg" alt="" class="avatar__image">
					</div>
					<div class="agent__information">
						<div class="name__agent">Наталья Комарова</div>
						<div class="profession__agent">Зам.Директор</div>
						<div class="personal__information">
							<div class="agent__phone"><i class="site__icons phone__icons agent__phone__icons"></i>8 (845) 298-86-48</div>
							<div class="agent__email"><i class="site__icons email__icons email__agent__icons"></i>eurometer64@gmail.com</div>
						</div>
					</div>
				</div>
				<div class="grid__agent__item">
					<div class="agent__avatar">
						<img src="./img/team/3.jpg" alt="" class="avatar__image">
					</div>
					<div class="agent__information">
						<div class="name__agent">Виктория Ветрова</div>
						<div class="profession__agent">Риэлтор</div>
						<div class="personal__information">
							<div class="agent__phone"><i class="site__icons phone__icons agent__phone__icons"></i>8 (845) 298-86-48</div>
							<div class="agent__email"><i class="site__icons email__icons email__agent__icons"></i>eurometer64@gmail.com</div>
						</div>
					</div>
				</div>
				<div class="grid__agent__item">
					<div class="agent__avatar">
						<img src="./img/team/4.jpg" alt="" class="avatar__image">
					</div>
					<div class="agent__information">
						<div class="name__agent">Сергей Смирнов</div>
						<div class="profession__agent">Маркетолог</div>
						<div class="personal__information">
							<div class="agent__phone"><i class="site__icons phone__icons agent__phone__icons"></i>8 (845) 298-86-48</div>
							<div class="agent__email"><i class="site__icons email__icons email__agent__icons"></i>eurometer64@gmail.com</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<form action="feedbacks_db.php" method="post" class="card-body feedback-input-field shadow-sm p-3 mb-2 block" style="max-width: 1170px; margin: 0 auto;">
                        <h3 class="text-center">Оставьте свой отзыв</h3>
                        <p>Здесь вы найдете разнообразные отзывы и рекомендации от наших клиентов, которые имели опыт сотрудничества с нами.</p>
                        <hr>
                        <div class="feedback-input-name input-group pb-3">
                            <input type="text" name="name" class="form-control" placeholder="Имя пользователя" aria-label="Имя пользователя" aria-describedby="basic-addon1" maxlength="128" required>
                        </div>
                        <div class="feedback-input-email input-group pb-3">
                            <input type="email" name="email" class="form-control" placeholder="Электронная почта пользователя" aria-label="Имя пользователя получателя" aria-describedby="basic-addon2" maxlength="128" required>
                        </div>
                        <div class="feedback-input-header-text input-group pb-3">
                            <input type="text" name="header" class="form-control" placeholder="Заголовок отзыва" aria-label="Заголовок отзыва" aria-describedby="basic-addon1" maxlength="255" required>
                        </div>
                        <div class="feedback-input-text input-group pb-3">
                            <textarea class="form-control" name="text" placeholder="Подробное описание" aria-label="Подробное описание" oninput="auto_grow(this)" required></textarea>
                        </div>
                        <div class="feedback-button-send d-grid">
                            <button class="btn" type="submit" style="background-color: #30caa0;">
                                Оставить отзыв
                            </button>
                        </div>
                    </form>
        <div class="card-body" style="max-width: 1170px; margin: 0 auto;">
                        <h3 class="feedback-users-header text-center">Отзывы клиентов</h3>
                        <hr>
                        <div class="row gy-4">
                                <?php
                                    $feedbacks = mysqli_query($connect, "SELECT * FROM `feedbacks`");
                                    $feedbacks = mysqli_fetch_all($feedbacks);
                                    $have_feedbacks = false;

                                    foreach ($feedbacks as $feedback) {
                                        if ($feedback[5] < 1) {
                                            continue;
                                        }
                                ?>
                                <div class="col-6">
                                    <div class="feedback-card border-0 shadow">
                                        <div class="card-header" style="background-color: #30caa0;">
                                            <h4 class="mb-0"><?= $feedback[1] ?></h4>
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title"><?= $feedback[3] ?></h5>
                                            <p class="card-text"><?= $feedback[4] ?></p>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                    $have_feedbacks = true;
                                    }
                                    if (!$have_feedbacks) {
                                ?>
                                    <div class="text-center">Отзывов еще нету - будьте первыми.</div>
                                <?php
                                    }
                                ?>
                        </div>
                    </div>
                </div>
		<footer class="footer">
			<div class="footer__container">
				<div class="footer__column__container">
					<div class="footer_column">
						<a href="index.html"><img src="./img/logo.png" alt="" class="logo__img__footer"></a>
						<div class="footer__social">
							<a href="#"><i class="site__icons facebook__icons"></i></a>
							<a href="#"><i class="site__icons twitter__icons"></i></a>
							<a href="#"><i class="site__icons instagram__icons"></i></a>
							<a href="#"><i class="site__icons pinterest__icons"></i></a>
							<a href="#"><i class="site__icons linkedin__icons"></i></a>
						</div>
					</div>
					<div class="footer_column">
						<div class="footer_column__title">Cвязаться с нами</div>
						<ul class="contact__list">
							<li class="location__footer"><i class="site__icons location__footer__icons footer__i"></i>  ул. Яблочкова, 26/28, Саратов, Саратовская обл.</li>
							<li class="telephone__footer"><i class="site__icons phone__icons footer__i"></i>8 (845) 298-86-48</li>
							<li class="email__footer"><i class="site__icons email__icons footer__i"></i>eurometers64@gmail.com</li>
							<li class="time__footer"><i class="site__icons time__icons footer__i"></i>Пн - Сб, с 8:00 до 18:00</li>
						</ul>
					</div>
					<div class="footer_column">
						<div class="footer_column__title">Разделы</div>
						<ul class="popular__places__list">
							<li class="footer__bottom__list__item"><a href="index.html">Главная</a></li>
							<li class="footer__bottom__list__item"><a href="featured__listings.html">Каталог</a></li>
							<li class="footer__bottom__list__item"><a href="about__us.html">О нас</a></li>
							<li class="footer__bottom__list__item"><a href="pages_Serbia.html">Информация</a></li>
							<li class="footer__bottom__list__item"><a href="blog.html">Новости</a></li>
							<li class="footer__bottom__list__item"><a href="contact.html">Контакты</a></li>
						</ul>
					</div>

				</div>
				<div class="footer__bottom__container">
					<div class="copyright">Авторское право © 2025 ITEgor. Все права защищены.</div>
				</div>
			</div>
		</footer>

		<script src="./js/index__script.js"></script>

</body>
</html>