<?php include 'head.php' ?>
<div style="background-color: #e9f8fb;" class="nav-wrapper">
	<div class="container">
		<?php include 'nav.php' ?>
	</div>
</div>
<body>
	<section class="profile">
		<div class="container">
			<?php
				if($_COOKIE['user'] != ''):
			?>
			<form action="database/update.php" class="profile-settings" method="post">
				<div class="title title_blue title_settings">Здравствуйте, <?php echo $_COOKIE['user']?></div>
				<div class="settings-subtitle">Ваши данные</div>
				<label for="settings-login">Ваш логин:</label>
				<input id='settings-login' autocomplete="off" name="login" required value="<?php echo $_COOKIE['user_login']?>" type="text">
				<label for="settings-name">Ваше имя:</label>
				<input id='settings-name' autocomplete="off" name="name" required value="<?php echo $_COOKIE['user']?>" placeholder="Ваше имя" type="text">
				<label for="settings-email">Ваш email:</label>
				<input id='settings-email' autocomplete="off" name="email" required value="<?php echo $_COOKIE['user_email']?>" placeholder="Ваша почта" type="text">
				<label for="settings-email">Ваш телефон:</label>
				<input id='settings-phone' autocomplete="off" name="phone" required value="<?php echo $_COOKIE['user_phone']?>" placeholder="Ваш телефон" type="text">
				<label for="settings-pass">Введите ваш пароль:</label>
				<input id='settings-pass' autocomplete="off" name="pass"  placeholder="Текущий пароль" type="password">
				<button type="submit" class="button button_submit">Сохранить изменения</button>
			</form>
			<?php
				else:
			?>
			<div>Вы не авторизованы</div>
			<?php
				endif;
			?>
		</div>
	</section>
</body>
<?php include 'footer.php' ?>