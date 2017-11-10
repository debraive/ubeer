<?php

include "./database.php";

extract($_POST);
$req = $bd->prepare("INSERT INTO User (Mail,Actif)VALUES  (?,?)");
$req->execute([$mail, 1]);

header("location:../index.php");

?>