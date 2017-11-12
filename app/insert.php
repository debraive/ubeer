<?php

include "./database.php";

extract($_POST);

if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
    $message = "$mail is not a valid email address";
} else {
    $req = $bd->prepare("INSERT INTO Users (Mail)VALUES  (?)");
    $req->execute([$mail]);
    $req->closeCursor();
    $message = "Thanks for registering, you will soon get notified !";
}
header("location:../index.php?message=" . $message);
?>