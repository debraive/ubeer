<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <title>Admin</title>
</head>
<body>

<h1 id="pageTitle">"Nos inscrits"</h1>
<a href="../index.php"><h1 class="back">Go To Website</h1></a>
<div id="main">
    <div class="content">
        <div class='tableau'>
            <table>
                <tr>
                    <th colspan="3">Insrits</th>
                </tr>
                <tr id="titlesRow">
                    <th>Users</th>
                    <th colspan="2">Actions</th>
                </tr>
                <?php
                include "../app/listUsers.php";
                foreach ($users as $user) {
                    echo "<tr>";
                    echo "<td id='usersTd'>{$user['Mail']}</td>";
                    echo "<td>
                        <div class='actions'>
                            <form action='./adminEdit.php' method='post' >
                                <button onclick='this.form.submit()'>edit</button>
                                <input type='hidden' value='{$user['Mail']}' name='mail' required>
                                <input type='hidden' value='{$user['Id']}' name='id'>
                             </form>
                            <form action='../app/delete.php' method='post'>
                                <button onclick='this.form.submit()'>delete</button>
                                <input type='hidden' value='{$user['Id']}' name='id'>
                             </form>    
                        </div>
                    </td>";
                    echo "</tr>";
                }
                ?>
        </div>
    </div>
</body>
</html>
