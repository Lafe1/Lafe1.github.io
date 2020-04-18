<?php include 'head.php' ?>
<?php include 'nav.php' ?>
<?php


$mysql = new mysqli('localhost', 'root', 'root', 'avents');
// $mysql->query("INSERT INTO `users` (`user_login`, `user_pass`, `user_email`, `user_phone`, `user_status`) VALUES('$login', '$pass', '$name', '$email', '$phone', 'user')");
// $mysql->query("INSERT INTO `users` (`user_id`, `user_login`, `user_pass`, `user_name`, `user_email`, `user_phone`, `user_status`) VALUES (NULL, '$login', '$pass', '$name', '$email', '$phone', 'user');");

$result = $mysql->query("SELECT * FROM `goods`");

$goods = mysqli_fetch_all($result, MYSQLI_ASSOC);

if(count($goods) == 0) {
	echo "Не найден";
	exit();
}

?>
<section class="goods">
	<div class="container">
			<ul class="goods__tabs">
				<li class="goods__tab goods__tab_active"><div>Вентиляция</div></li>
				<li class="goods__tab"><div>Кондиционирование</div></li>
				<li class="goods__tab"><div>Отопление</div></li>
			</ul>

			<div class="goods__content goods__content_active">
				<?
					foreach ($goods as $row) {
						if($row['goods_type'] == 'вентиляция'):
				?>
				<div class="goods-item">
					<div class="goods-item__wrapper">
						<div class="goods-item__content">

							<img src="<?php echo $row['goods_photo']?>" alt="пульсометр" class="goods-item__img">
							<div class="goods-item__subtitle"><?php echo $row['goods_name']?></div>

						</div>

						<div class="goods-item__descr-wrapper">
							<div class="goods-item__descr "><?php echo $row['goods_descr']?></div>
							<a href="" class="goods-item__link">ПОДРОБНЕЕ</a>
							<div class="goods-item__details"><?php echo $row['goods_full-descr']?></div>
							<div class="goods-item__prices">
								<div class="goods-item__old-price"><?php echo $row['goods_old-price']?></div>
								<div class="goods-item__price"><?php echo $row['goods_price']?></div>
								<button class="button">КУПИТЬ</button>
							</div>

						</div>
						
					</div>

				</div>
				<?php
						endif;
					}
					$mysql->close();
				?>

			</div>

			<div class="goods__content">
				<?
					foreach ($goods as $row) {
						if($row['goods_type'] == 'кондиционирование'):
				?>
				<div class="goods-item">
					<div class="goods-item__wrapper">
						<div class="goods-item__content">

							<img src="<?php echo $row['goods_photo']?>" alt="пульсометр" class="goods-item__img">
							<div class="goods-item__subtitle"><?php echo $row['goods_name']?></div>

						</div>

						<div class="goods-item__descr-wrapper">
							<div class="goods-item__descr "><?php echo $row['goods_descr']?></div>
							<a href="" class="goods-item__link">ПОДРОБНЕЕ</a>
							<div class="goods-item__details"><?php echo $row['goods_full-descr']?></div>
							<div class="goods-item__prices">
								<div class="goods-item__old-price"><?php echo $row['goods_old-price']?></div>
								<div class="goods-item__price"><?php echo $row['goods_price']?></div>
								<button class="button">КУПИТЬ</button>
							</div>

						</div>
						
					</div>

				</div>
				<?php
						endif;
					}
					$mysql->close();
				?>
				
			</div>

			<div class="goods__content">
				<?
					foreach ($goods as $row) {
						if($row['goods_type'] == 'отопление'):
				?>
				<div class="goods-item">
					<div class="goods-item__wrapper">
						<div class="goods-item__content">

							<img src="<?php echo $row['goods_photo']?>" alt="пульсометр" class="goods-item__img">
							<div class="goods-item__subtitle"><?php echo $row['goods_name']?></div>

						</div>

						<div class="goods-item__descr-wrapper">
							<div class="goods-item__descr "><?php echo $row['goods_descr']?></div>
							<a href="" class="goods-item__link">ПОДРОБНЕЕ</a>
							<div class="goods-item__details"><?php echo $row['goods_full-descr']?></div>
							<div class="goods-item__prices">
								<div class="goods-item__old-price"><?php echo $row['goods_old-price']?></div>
								<div class="goods-item__price"><?php echo $row['goods_price']?></div>
								<button class="button">КУПИТЬ</button>
							</div>

						</div>
						
					</div>

				</div>
				<?php
						endif;
					}
					$mysql->close();
				?>
				
			</div>
	</div>
</section>
<?php include 'slider.php'?>
<?php include 'footer.php' ?>