	<div class="overlay">
		<div class="modal" id="consultation">
			<div class="modal__close">&times</div>
			<div class="modal__subtitle">Просто заполните форму заявки </div>
			<div class="modal__descr">и мы перезвоним вам в течении 10 минут</div>
			<form id="overlay__consultation-form" class="feed-form feed-form_mt25" action="#">
				<input name="name" required placeholder="Ваше имя" type="text">
				<input name="phone" required placeholder="Ваш телефон">
				<input name="email" required placeholder="Ваш E-mail" type="email">

				<button class="button button_submit">заказать консультацию</button>
			</form>
		</div>

		<div class="modal" id="order">

			<div class="modal__close">&times</div>
			<div class="modal__subtitle">Ваш заказ:</div>
			<div class="modal__descr"></div>
			<form class="feed-form feed-form_mt25"action="#">
				<input name="name" required placeholder="Ваше имя" type="text">
				<input name="phone" required placeholder="Ваш телефон">
				<input name="email" required placeholder="Ваш E-mail" type="email">

				<button class="button button_submit">Купить</button>
			</form>
		</div>


		<div class="modal modal_reg" id="reg">

			<div class="modal__close">&times</div>
			<div class="modal__subtitle">Регистрация</div>
			<div class="modal__descr">Введите данные</div>
			
			<form id="form-reg" method="POST" class="feed-form feed-form_mt25" action="database/reg.php">
				<input name="login" required placeholder="Придумайте логин" type="text">
				<input name="pass" required placeholder="Придумайте пароль" type="password">
				<input name="name" required placeholder="Ваше имя" type="text">
				<input name="email" required placeholder="Ваша почта" type="text">
				<input name="phone" required placeholder="Ваш телефон" type="text">

				<button type="submit" class="button button_submit">Зарегестрироваться</button>
			</form>
		</div>


		<div class="modal modal_auth" id="auth">
			<div class="modal__close">&times</div>
			<div class="modal__subtitle">Вход</div>
			<div class="modal__descr">Введите данные</div>
			<div class="modal__descr"></div>
			<form id="form-auth" method="POST" class="feed-form feed-form_mt25"action="database/auth.php">
				<input name="login" required placeholder="Введите логин" type="text">
				<input name="pass" required placeholder="Введите пароль" type="password">

				<button type="submit" class="button button_submit">Войти</button>
			</form>
		</div>

		<div class="modal modal_mini" id="thanks">
			<div class="modal__close">&times</div>
			<div class="modal__subtitle">Спасибо за вашу заявку!</div>
			<div class="modal__descr">Наш менеджер свяжется с вами в ближайщее время!</div>

		</div>
	</div>
	<a href="#up" class="pageup">
		<img src="img/up.svg" alt="up">
	</a>