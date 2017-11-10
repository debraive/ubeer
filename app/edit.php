<?php

include "./database.php";

extract($_POST);
print_r($_POST);
$req = $bd->prepare("update User set Mail = (?) where Id=(?)");
$req->execute([$mail, $id]);

header("location:../views/adminHome.php");
?>