<?php

include_once("dbconnection.php");

$password = $_REQUEST["password"];
$passwordre = $_REQUEST["passwordre"];


if($password!= $passwordre){
    die(header("Location: ../register.php?error=1"));
}
else{

    $ime = $_REQUEST["ime"];
    $prezime = $_REQUEST["prezime"];
    $email = $_REQUEST["email"];
    $about = $_REQUEST["about"];

    $query = $mysqli->query("SELECT * FROM user WHERE email='$email'");
    $num = $query->num_rows;
    if($num>0){
        die(header("Location: ../register.php?error=2"));
    }

    $statement = $mysqli->prepare("INSERT INTO user (ime, prezime, email, password, about) VALUES (?, ?, ?, ?, ?)");

    $statement->bind_param('sssss', $ime, $prezime, $email, md5($password), $about);

    if($statement->execute()){
        header("Location: ../index.php?success=1");
    }else{
        die('Error: (' .$mysqli->errno . ')' . $mysqli->error);
    }


}






?>