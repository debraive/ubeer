<?php
include "database.php";

$dbUsers = $bd->query("SELECT * FROM User where Actif=1");
$users = [];

while ($user = $dbUsers->fetch()) {
    $users[] = $user;
}

?>