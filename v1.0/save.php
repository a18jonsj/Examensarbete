<?php
   include_once "config.php";

   $datbase = new Databas();
   $conn = $datbase ->getConnection();
   
   if (isset($_POST["hr"]) and isset($_POST["min"]) and isset($_POST["sec"])){
       
           $Query = "INSERT INTO time (THOUR, TMIN, TSEC) VALUES (:THOUR, :TMIN, :TSEC);";
           $STMT = $conn -> prepare ($Query);
           $STMT -> bindParam(":THOUR", $_POST["hr"]);
           $STMT -> bindParam(":TMIN", $_POST["min"]); 
           $STMT -> bindParam(":TSEC", $_POST["sec"]); 
           
           $STMT -> execute();
          
       
   }else {
   echo "fail";
   }
?>