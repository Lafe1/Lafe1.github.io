<?php include 'head.php' ?>
<body>
	<?php include 'nav.php'?>
	<main>
		<section class="promo">
			<div class="container">
				<div class="promo__wrapper">
					<h1 class="promo__header">Подбор систем вентиляции и кондиционирования</h1>
					<h2 class="promo__subheader">Лучший способ подобрать подходящую систему</h2>
					<div class="calc">
						<ul class="calc-choise">
							<li class="calc-choise__choise-item calc-choise__choise-item_active">Вентиляция</li>
							<li class="calc-choise__choise-item">Кондиционирование</li>
						</ul>
						<form action="#" class="calc-form calc-form_active">
							<label for="area">Площадь, м<sup>2</sup></label>
							<input id="area" name="Area" placeholder="Площадь" type="text">
							<label for="type_premise">Тип помещения</label>
							<select id="type_premise" name="Type_premise" placeholder="Тип помещения" type="text">
								<option></option>
								<option>фвафы</option>
								<option>Пункт 2</option>
							</select>
							<label for="count_people">Кол-во людей, чел</label>
							<input id="count_people" name="Count_people" placeholder="Кол-во людей" type="text">
							<label for="work_time">Рабочее время, ч</label>
							<input id="work_time" name="Work_time" placeholder="Рабочее время" type="text">
							<button class="button button-main">Подобрать 1</button>
						</form>
						<form action="#" class="calc-form">
							<label for="area">Площадь</label>
							<input id="area" name="Area" placeholder="Площадь" type="text">
							<label for="type_premise">Тип помещения, м<sup>2</sup></label>
							<input id="type_premise" name="Type_premise" placeholder="Тип помещения" type="text">
							<label for="count_people">Кол-во людей, чел</label>
							<input id="count_people" name="Count_people" placeholder="Кол-во людей" type="text">
							<label for="work_time">Рабочее время, ч</label>
							<input id="work_time" name="Work_time" placeholder="Рабочее время" type="text">
							<button class="button button-main">Подобрать 2</button>
						</form>
					</div>
					<div class="promo__down-wrapper">
						<span>Подробнее</span>
						<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-double-down" class="svg-inline--fa fa-angle-double-down fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M143 256.3L7 120.3c-9.4-9.4-9.4-24.6 0-33.9l22.6-22.6c9.4-9.4 24.6-9.4 33.9 0l96.4 96.4 96.4-96.4c9.4-9.4 24.6-9.4 33.9 0L313 86.3c9.4 9.4 9.4 24.6 0 33.9l-136 136c-9.4 9.5-24.6 9.5-34 .1zm34 192l136-136c9.4-9.4 9.4-24.6 0-33.9l-22.6-22.6c-9.4-9.4-24.6-9.4-33.9 0L160 352.1l-96.4-96.4c-9.4-9.4-24.6-9.4-33.9 0L7 278.3c-9.4 9.4-9.4 24.6 0 33.9l136 136c9.4 9.5 24.6 9.5 34 .1z"></path></svg>
					</div>
				</div>
			</div>
		</section>
		<section class="advantages">
			<div class="container">
				<h2 class="title">Основные направления услуг</h2>
				<div class="advantages__wrapper">
					<div class="advantages__item">
						<img src="img/adv1.svg" alt="cup">
						<div class="advantages__subtitle">Монтаж</div>
						<div class="advantages__descr">Производим монтаж оборудования любой сложности</div>
						<button data-modal="consultation" class="button">Заказать</button>
					</div>
					<div class="advantages__item">
						<img src="img/adv2.svg" alt="cup">
						<div class="advantages__subtitle">Проектирование</div>
						<div class="advantages__descr">Наши специалисты качественно спроектируют систему для любого здания</div>
						<button data-modal="consultation" class="button">Заказать</button>
					</div>
					<div class="advantages__item">
						<img src="img/adv3.svg" alt="cup">
						<div class="advantages__subtitle">Оборудование</div>
						<div class="advantages__descr">Поставляем любое необходимое оборудования для вашего предприятия</div>
						<button data-modal="consultation" class="button">Заказать</button>
					</div>
				</div>
			</div>
		</section>
		<section class="consultation">
			<div class="container">
				<h2 class="title title_left">
					Получите бесплатную консультацию<br>
					по подбору систем
				</h2>
				<div class="consultation__descr">
					Просто заполните форму заявки <br>
					и мы перезвоним вам в течении 10 минут
				</div>
				<form id="consultation-form" class="feed-form" action="#">
					<input name="name" required placeholder="Ваше имя" type="text">
					<input name="phone" required placeholder="Ваш телефон">
					<input name="email" required placeholder="Ваш E-mail" type="email">

					<button class="button button_submit">заказать консультацию</button>
				</form>
			</div>
		</section>
		<?php include 'slider.php'?>
		<section class="reviews">
			<div class="container">
				<h2 class="title">Отзывы клиентов</h2>
				<div class="reviews-item">
					<div class="reviews-item__img-wrapper">
						<img src="img/member2.png" alt="клиент">
					</div>
					<div class="reviews-item__deckr-wrapper">
						<div class="reviews-item__name">Ирина Иванченко</div>
						<div class="reviews-item__label">Монтаж систем вентиляции</div>
						<div class="reviews-item__descr">Необходимо было установить систему вентиляции офиса. Долго думали
							как подобрать оборудование и установить по приемлемой цене. К счатью нашли эту замечательную компанию, 
							заказали консультацию и за неделю всё было полностью сделано!
							<br><br>
							Выполненными работами довольны.
							<br><br>
							<span>Спасибо, Avents </span>
						</div>
					</div>
				</div>
				<hr>
				<div class="reviews-item">
					
					<div class="reviews-item__deckr-wrapper">
						<div class="reviews-item__name">Иван Сёмочкин</div>
						<div class="reviews-item__label">Проектирование</div>
						<div class="reviews-item__descr">Необходимо было спроектировать с нуля систему вентиляции и кондиционирования
							для нового только построенного здания. Обратились в компанию Avents, полностью довольны выполненными работами
							<br><br>
							<span>Всё было сделано очень быстро и качественно</span>
						</div>
					</div>
					<div class="reviews-item__img-wrapper">
						<img src="img/member1.png" alt="клиент">
					</div>
				</div>
				<hr>
				<div class="reviews-item">
					<div class="reviews-item__img-wrapper">
						<img src="img/member2.png" alt="клиент">
					</div>
					<div class="reviews-item__deckr-wrapper">
						<div class="reviews-item__name">Юлия Дашкина</div>
						<div class="reviews-item__label">2 полумарафона</div>
						<div class="reviews-item__descr">Долго не могли подобрать систему кондиционирования для частного дома.
						<br><br>
						Позвонила, ребята поинтересовались моими целями и подобрали очень интересный вариант со скидкой! Выполненными работами очень довольны.
						<br><br>	 
						<span>Спасибо!!!</span>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>
	<footer class="footer">
		<div class="container">
			<div class="title title_blue">Контакты</div>
			<div class="footer__wrapper">
				<div class="footer__contacts-wrapper">
					<div class="footer__address"><span>Адрес:</span> Казань, Портовая улица, 19.</div>
					<div class="footer__phone"><span>Телефон:</span> <a href="tel:+74999228974">+7 (499) 922-89-74</a></div>
					<div class="footer__map"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A02b28cabc4c3ddc5c6c89ce52f9bc66482259d6613be9df6f0ce1135c8a40047&amp;source=constructor" width="580" height="300" frameborder="0"></iframe></div>
				</div>
				<form id="consultation-form" class="feed-form feed-form_footer" action="#">
					<div class="title">Оставить заявку</div>
					<input name="name" required placeholder="Ваше имя" type="text">
					<input name="phone" required placeholder="Ваш телефон">
					<input name="email" required placeholder="Ваш E-mail" type="email">

					<button class="button button_submit">заказать консультацию</button>
				</form>
			</div>
		</div>
	</footer>
	<?php include 'modal.php'?>
	<script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
	<script src="js/jquery.validate.min.js"></script>
	<script src="js/jquery.maskedinput.min.js"></script>
	<script src="js/script.js"></script>
	<script src="js/second.js"></script>
</body>
</html>