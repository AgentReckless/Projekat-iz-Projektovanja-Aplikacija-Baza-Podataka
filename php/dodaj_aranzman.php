<?php

include_once("dbconnection.php");


    $naziv = $_REQUEST["naziv"];
    $destinacija = $_REQUEST["destinacija"];
    $cena = $_REQUEST["cena"];
    $rezervacija = 0;

    $statement = $mysqli->prepare("INSERT INTO aranzmani (naziv, destinacija, cena, rezervacija) VALUES (?, ?, ?, ?)");

    $statement->bind_param('sssi', $naziv, $destinacija, $cena, $rezervacija);

    if($statement->execute()){
        header("Location: ../dodaj_aranzman.php?success=1");
    }else{
        die('Error: (' .$mysqli->errno . ')' . $mysqli->error);
    }



?>