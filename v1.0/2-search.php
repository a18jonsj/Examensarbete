<?php
include_once "config.php";
$datbase = new Databas();
$conn = $datbase ->getConnection();
$stmt = $conn->prepare("SELECT * FROM TICKET WHERE DESTINATION LIKE ? OR DEPARTURE LIKE ? OR TICKETNUMBER LIKE ? or REGDATE LIKE ?");
$stmt->execute(["%".$_POST['search']."%", "%".$_POST['search']."%", "%".$_POST['search']."%", "%".$_POST['search']."%"]);
$results = $stmt->fetchAll();
if (isset($_POST['ajax'])) { echo json_encode($results); }
?>

