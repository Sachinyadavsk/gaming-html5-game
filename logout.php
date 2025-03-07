<?php
session_start();
session_unset(); 
session_destroy(); 
header("Location: https://zettagame.com/login");
exit();
?>
