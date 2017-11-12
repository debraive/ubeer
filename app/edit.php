<?php

include "./database.php";

extract($_POST);

$req = $bd->prepare("SELECT * FROM Users where Mail = (?)");
$req->execute([$mail]);
if ($req->rowCount() == 1) {
    header("location:../views/adminEdit.php?message=mail already registered");
    exit();
}

$req = $bd->prepare("update Users set Mail = (?) where Id=(?)");
$req->execute([$mail, $id]);
header("location:../views/adminHome.php");
?>