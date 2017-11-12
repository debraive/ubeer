<?php
include "database.php";

$dbUsers = $bd->query("SELECT * FROM Users");
$users = [];

while ($user = $dbUsers->fetch()) {
    $users[] = $user;
}

?>