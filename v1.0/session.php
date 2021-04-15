<?php 
    include("config.php");
    session_start();

    if(!isset($_SESSION["ssn"])){
        header ("location: v1.1_login.html");
        die();
    }
?>