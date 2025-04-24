<?php
session_start();
unset($_SESSION["usuario"]);
unset($_SESSION["senha"]);
   
echo 'You are now logging-out please wait....';
echo '<meta http-equiv="refresh" content="2;url=/">';
?>