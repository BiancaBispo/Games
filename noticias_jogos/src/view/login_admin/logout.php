<?php
session_start();

session_unset();
session_destroy();

header("Location: /noticias_jogos/index.php");
?>