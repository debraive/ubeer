<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <title>Document</title>
</head>
<body>
<h1 id="pageTitle">"Edit Page"</h1>
<a href="./adminHome.php"><h1 class="back">Retour</h1></a>
<div id="main">
    <div class="content">
        <form id="editForm" action="../app/edit.php" method="post">
            <h1>Edit User</h1>
            <input type="email" value="<?= $_POST['mail'] ?>" name="mail">
            <input type="hidden" value="<?= $_POST['id'] ?>" name="id">
            <div>
                <input type="submit" value="save changes">
            </div>
        </form>
    </div>
</div>
</body>
</html>