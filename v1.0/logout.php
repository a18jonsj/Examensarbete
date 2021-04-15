<?php
   session_start();
   
   if(session_destroy()) {
      header("Location: v1.1_login.html");
   }
?>