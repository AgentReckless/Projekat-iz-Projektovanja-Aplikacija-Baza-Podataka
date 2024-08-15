<?php
include_once("dbconnection.php");
session_start();

if (!isset($_SESSION["id"])) {
    header("Location: index.php?error=2");
    exit;
}

$id = $_POST["id"];
$naziv = $_POST["aranzman_naziv"];
$destinacija = $_POST["aranzman_destinacija"];
$cena = $_POST["aranzman_cena"];
$rezervacija = $_POST["aranzman_rezervacija"];

$statement = $mysqli->prepare("UPDATE aranzmani SET naziv = ? , destinacija = ? , cena = ? , rezervacija = ? WHERE id=?");
$statement->bind_param('sssii', $naziv, $destinacija, $cena, $rezervacija,$id);
if ($statement->execute()) {
   header("Location: ../panel.php");
    exit;
} else {
    die('Error: (' . $mysqli->errno . ') ' . $mysqli->error);
}


?>