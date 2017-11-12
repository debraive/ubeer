<?php

include "./database.php";

extract($_POST);
$req = $bd->exec("delete from Users where id = {$id}");

header("location:../views/adminHome.php");
?>