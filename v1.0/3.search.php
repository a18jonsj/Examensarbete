<?php
include_once "config.php";
$datbase = new Databas();
$conn = $datbase ->getConnection();
$stmt = $conn->prepare("SELECT * FROM  USER WHERE SSN LIKE ? OR UNAME LIKE ? OR ULNAME LIKE ? or EMAIl LIKE ?");
$stmt->execute(["%".$_POST['search']."%", "%".$_POST['search']."%", "%".$_POST['search']."%", "%".$_POST['search']."%"]);
$results = $stmt->fetchAll();
if (isset($_POST['ajax'])) { echo json_encode($results); }
?>

