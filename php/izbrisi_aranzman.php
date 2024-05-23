<?php

include_once("dbconnection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $aranzman_id = $_POST["aranzman_id"];

    $query = "DELETE FROM aranzmani WHERE id = '$aranzman_id'";
    $result = mysqli_query($mysqli, $query);

    if ($result) {
        header("Location: ../panel.php");
        exit();
    } else {
        die("Greska pri brisanju aranzmana: " . mysqli_error($mysqli));
    }
} else {
    die("Invalid");
}
?>
