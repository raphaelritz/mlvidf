<?php

file_put_contents("list.txt", $_POST['P_mail'] . "\n" . $_POST['V_mail'] . "\n" . "\n", FILE_APPEND);
header('Location: done.html');
exit();

?>