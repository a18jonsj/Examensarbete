<?php
include_once "config.php";
$datbase = new Databas();
$conn = $datbase ->getConnection();
$stmt = $conn->prepare("SELECT * FROM TICKET WHERE DESTINATION LIKE ? OR DEPARTURE LIKE ? OR TICKETNUMBER LIKE ? or REGDATE LIKE ?");
$stmt->execute(["%".$_POST['test1']."%", "%".$_POST['test1']."%", "%".$_POST['test1']."%", "%".$_POST['test1']."%"]);
$results = $stmt->fetchAll();
if (isset($_POST['ajax'])) { echo json_encode($results); }
?>

