<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <title>Admin</title>
</head>
<body>
<div id="main">
    <h1>"Nos inscrits"</h1>
    <div class='tableau'>
        <table>
            <?php
            include "../app/listUsers.php";
            foreach ($users as $user) {
                echo "<tr>";
                echo "<td>{$user['Mail']}</td>";
                echo "<td>
                <form action='./adminEdit.php' method='post' >
                    <button onclick='this.form.submit()'>edit</button>
                    <input type='hidden' value='{$user['Mail']}' name='mail'>
                    <input type='hidden' value='{$user['Id']}' name='id'>
                 </form>
              </td>";
                echo "<td>
                <form action='../app/delete.php' method='post'>
                    <button onclick='this.form.submit()'>delete</button>
                    <input type='hidden' value='{$user['Id']}' name='id'>
                 </form>
              </td>";
                echo "</tr>";
            }
            ?>
    </div>
</body>
</html>
