<?php
include_once("dbconnection.php");
session_start();

if (!isset($_SESSION["id"])) {
    header("Location: index.php?error=2");
    exit;
}

$user_id = $_SESSION["id"];
$id = $_POST["aranzman_id"];

$statement = $mysqli->prepare("UPDATE aranzmani SET rezervacija = rezervacija - 1 WHERE id = ?");
$statement->bind_param('i', $id);

if ($statement->execute()) {
    header("Location: ../panel.php");
    exit;
} else {
    die('Error: (' . $mysqli->errno . ') ' . $mysqli->error);
}
?>
