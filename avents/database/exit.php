<?php

setcookie('user', $user['user_name'], time() - 3600, "/avents");
setcookie('user_login', $user['user_login'], time() - 3600, "/avents");
setcookie('user_pass', $user['user_pass'], time() - 3600, "/avents");
setcookie('user_email', $user['user_email'], time() - 3600, "/avents");
setcookie('user_phone', $user['user_phone'], time() - 3600, "/avents");

header('Location: /avents/src/index.php');

?>