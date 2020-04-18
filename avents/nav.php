<?php include 'head.php' ?>
<nav class="nav">
	<div class="container">
		<div class="nav__wrapper">
			<a href="index.php" class="nav__logo">
				<img src="img/logo.svg" alt="Логотип">
			</a>
			<nav class="nav__menu">
				<?php $url = $_SERVER["REQUEST_URI"];?>
				<ul class="nav__menu-ul">
					<li class="nav__menu-item<?php if ($url == "/avents/src/index.php") {echo ' nav__menu-item_active';}?>"><a href="index.php">Главная</a></li>
					<li class="nav__menu-item<?php if ($url == "/avents/src/goods.php") {echo ' nav__menu-item_active';}?>"><a href="goods.php">Товары</a></li>
					<li class="nav__menu-item<?php if ($url == "/avents/src/services.php") {echo ' nav__menu-item_active';}?>"><a href="services.php">Услуги</a></li>
					<li class="nav__menu-item<?php if ($url == "/avents/src/about.php") {echo ' nav__menu-item_active';}?>"><a href="about.php">О нас</a></li>
				</ul>
			</nav>
			<?php
				if($_COOKIE['user'] == ''):
			?>
			<div>
				<div class="nav__contacts">
					<a href="tel:+74999228974" class="nav__phone">+7 (499) 922-89-74</a>
					<!-- <button data-modal="consultation" class="button">Заказать звонок</button> -->
				</div>
				<div class="nav__aut-reg-wrapper">
					<a href="" class="nav__authorization">Авторизация</a>
					<span>/</span>
					<a href="" class="nav__registration">Регистрация</a>
				</div>
			</div>
			<?php
				else:
			?>
			<div>
			<div class="nav__profile-wrapper"><a href="profile.php"><img src="img/profile.svg" alt="cup"></a></div>
				<div class="nav__aut-reg-wrapper">
					<a href="database/exit.php" class="nav__exit">Выйти</a>
				</div>
			</div>
			<?php
				endif;
			?>
		</div>
	</div>
</nav>