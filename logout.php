<?php

session_start();
session_destroy();
setcookie("logcliente","0",time()-10);
header("Location:index.php");

?>

