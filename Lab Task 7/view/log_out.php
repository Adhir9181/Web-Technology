<?php

session_start();

if(isset($_SESSION["NID"])){
    session_destroy();
    header("location:accountant_login.php");
}
else if(!isset($_SESSION["NID"])){
    header("location:accountant_login.php");
}


?>