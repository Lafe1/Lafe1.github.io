<?php

$login = filter_var(trim($_POST[login]), FILTER_SANITIZE_STRING) ;
$pass = filter_var(trim($_POST[pass]), FILTER_SANITIZE_STRING) ;
$name = filter_var(trim($_POST[name]), FILTER_SANITIZE_STRING) ;
$email = filter_var(trim($_POST[email]), FILTER_SANITIZE_STRING) ;
$phone = filter_var(trim($_POST[phone]), FILTER_SANITIZE_STRING) ;

$pass = md5($pass);

$mysql = new mysqli('localhost', 'root', 'root', 'avents');
// $mysql->query("INSERT INTO `users` (`user_login`, `user_pass`, `user_email`, `user_phone`, `user_status`) VALUES('$login', '$pass', '$name', '$email', '$phone', 'user')");
// $mysql->query("INSERT INTO `users` (`user_id`, `user_login`, `user_pass`, `user_name`, `user_email`, `user_phone`, `user_status`) VALUES (NULL, '$login', '$pass', '$name', '$email', '$phone', 'user');");

$result = $mysql->query("SELECT * FROM `users` WHERE `user_login` = '$login' AND `user_pass` = '$pass'");


$user = $result->fetch_assoc();
if(count($user) == 0) {
	echo "Не найден";
	exit();
} else {
	$mysql->query("INSERT INTO `users` (`user_id`, `user_login`, `user_pass`, `user_name`, `user_email`, `user_phone`, `user_status`) VALUES (NULL, '$login', '$pass', '$name', '$email', '$phone', 'user');");
	$mysql->query("UPDATE `users` SET `user_login` = '$login', `user_pass` = '$pass', `user_name` = '$name', `user_email` = '$email', `user_phone` = '$phone' WHERE `users`. `user_login` = '$login';");
}



setcookie('user', $user['user_name'], time() + 3600, "/avents");
setcookie('user_login', $user['user_login'], time() + 3600, "/avents");
setcookie('user_pass', $user['user_pass'], time() + 3600, "/avents");
setcookie('user_email', $user['user_email'], time() + 3600, "/avents");
setcookie('user_phone', $user['user_phone'], time() + 3600, "/avents");

$mysql->close();

header('Location: /avents/src/profile.php');

?>