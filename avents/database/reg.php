<?php

$login = filter_var(trim($_POST[login]), FILTER_SANITIZE_STRING) ;
$pass = filter_var(trim($_POST[pass]), FILTER_SANITIZE_STRING) ;
$name = filter_var(trim($_POST[name]), FILTER_SANITIZE_STRING) ;
$email = filter_var(trim($_POST[email]), FILTER_SANITIZE_STRING) ;
$phone = filter_var(trim($_POST[phone]), FILTER_SANITIZE_STRING) ;

$pass = md5($pass);

$mysql = new mysqli('localhost', 'root', 'root', 'avents');
// $mysql->query("INSERT INTO `users` (`user_login`, `user_pass`, `user_email`, `user_phone`, `user_status`) VALUES('$login', '$pass', '$name', '$email', '$phone', 'user')");
$mysql->query("INSERT INTO `users` (`user_id`, `user_login`, `user_pass`, `user_name`, `user_email`, `user_phone`, `user_status`) VALUES (NULL, '$login', '$pass', '$name', '$email', '$phone', 'user');");

$mysql->close();

header('Location: /avents/src/index.php');
?>