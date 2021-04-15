<?php
include_once "config.php";

$datbase = new Databas();
$conn = $datbase ->getConnection();

if (isset($_POST["pnr"]) and isset($_POST["Förnamn"]) and isset($_POST["Efternamn"]) and isset($_POST["email"]) and isset($_POST["psw"]) and isset($_POST["psw-repeat"])){
    if(($_POST["psw"]) == ($_POST["psw-repeat"])) {
        $Query = "INSERT INTO USER (SSN, UNAME,ULNAME, EMAIL, PSWD) VALUES (:SSN, :UNAME, :ULNAME, :EMAIL, :PSWD);";
        $STMT = $conn -> prepare ($Query);
        $STMT -> bindParam(":SSN", $_POST["pnr"]);
        $STMT -> bindParam(":UNAME", $_POST["Förnamn"]); 
        $STMT -> bindParam(":ULNAME", $_POST["Efternamn"]); 
        $STMT -> bindParam(":EMAIL", $_POST["email"]); 
        $STMT -> bindParam(":PSWD", $_POST["psw"]);
        
        $STMT -> execute();
        header("Location: v1.1_login.html");
        exit();
        
    } else {
        echo "FU";
    }
}else {
echo "fail";
}





?>
