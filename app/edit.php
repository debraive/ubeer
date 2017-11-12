<?php

include "./database.php";

extract($_POST);
$req = $bd->prepare("update Users set Mail = (?) where Id=(?)");
$req->execute([$mail, $id]);
header("location:../views/adminHome.php");
?>