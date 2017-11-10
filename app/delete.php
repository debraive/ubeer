<?php

include "./database.php";

extract($_POST);
$req = $bd->exec("delete from User where id = {$id}");

header("location:../views/adminHome.php");
?>