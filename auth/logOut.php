<?php

require_once './loginConfig.php';

session_destroy();
unset($_SESSION['user']);
header("Location:./login.php");

?>