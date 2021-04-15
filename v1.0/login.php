<?php
session_start();
include_once "config.php";

$datbase = new Databas();
$conn = $datbase ->getConnection();

if (isset($_POST["email"]) and isset($_POST["psw"])){
$Query = "Select * from User where EMAIL = :EMAIL AND PSWD = :PSWD;";
$STMT = $conn -> prepare ($Query); 
$STMT -> execute (["EMAIL" => $_POST["email"] ,"PSWD" => $_POST["psw"] ]);
$result = $STMT -> fetch();
if ($STMT -> rowCount() == 1 ) {
   
    
    $_SESSION ["email"] = $result ["EMAIL"];
    $_SESSION ["namn"] = $result ["UNAME"];
    $_SESSION ["efternamn"] = $result ["ULNAME"];
    $_SESSION ["ssn"] = $result ["SSN"];

    header("location: welcome.php");
} else {
    echo "fel skit";
}

}

?>