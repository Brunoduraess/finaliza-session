<?php

if(!isset($_SESSION)){
    session_start();
}

session_destroy();

header("location: pagina_de_login.php");

?>